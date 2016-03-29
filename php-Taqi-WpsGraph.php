<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Live bar graph</title>

<script type="text/javascript" src="canvasjs.min.js"></script>
    
    <script type="text/javascript">
	
	<!--Author: Syed Taqi Raza -->
			
			$(document).ready(function () {

            $.getJSON("php-taqi-WpsQuery.php", function (result){
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled:true,
				animationDuration:2000,
				theme: "theme3",
				zoomEnabled: true,
				title:{text: "WPS per BSSID"},
				subtitles:[{text:"WPS user to crack handshakes"}],

				axisX: {title: "BSSIDs"},
				axisY: {title: "WordPerSecond"},
			data:
				[
					{
										
					type : "column",
					
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

  <div id="chartContainer" "></div>

</body>
</html>