<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	
    <title>Live bar graph</title>


<script type="text/javascript" src="canvasjs.min.js"></script>

    <script type="text/javascript">
	
	
			<!--Author: Syed Taqi Raza-->
			//This script is used to generate the bar chart for the	
			//characters of password length, 
			//Includes the passlengthlib-taqi.php to send queries to database
			$(document).ready(function () {

            $.getJSON("php-Taqi-PassLenQuery.php", function (result){
			var chart = new CanvasJS.Chart("chartContainer3", {
					
					
					animationEnabled:true,
					animationDuration:2500,
					
					title:{text: "Passlength per ESSID"},
					
					axisY: {title: 'Password String Length', minimum:5,},
					axisX: {title: "ESSIDs", minimum:0, },
							
					
					data:
					[
						{
											
							type : 'bar',
					
							dataPoints:result
							
						}
					
				
					]
				
				
					});
			
				chart.render();

				
				});
			});
        
    </script>
	
</head>
<body>

 <div id="chartContainer3" ></div>

</body>
</html>