<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	
    <title>Live bar graph</title>


<script type="text/javascript" src="canvasjs.min.js"></script>


    <script type="text/javascript">
	
	
			<!--Author: Syed Taqi Raza-->
			$(document).ready(function () {
            $.getJSON("php-Taqi-WCountQuery.php", function (result){
			var chart = new CanvasJS.Chart("chartContainer1", {
					
					animationEnabled: true,
					animationDuration: 3000,
					theme:"theme3",
					zoomEnabled: true,
					title:{text: "WordCounter Stats"},
					
					
					axisY: {title:"Word count", 
						includeZero: false},
					axisX : {title:"Total Words",
							},
							
					
					data:
					[
						{
											
							type : "bar",
					
							dataPoints: result
						}
					
				
					]
				
				
					});
			
				chart.render();
				
				});
			});
        
    </script>
	
</head>
<body>

    <div id="chartContainer1" ></div>

</body>
</html>