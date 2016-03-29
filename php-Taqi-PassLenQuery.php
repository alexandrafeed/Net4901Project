
		
		

<?php

//Author: Syed Taqi Raza
//Instruction: Include this php file in the same directory
// as main.php. This php script is used to get character length 
//from net4901 table
//NET4901- Fourth year Network technology project
header('Content-Type: application/json');

$con = mysqli_connect("a","a","a","a");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT Password, ESSID  FROM table");
    
	while($row = mysqli_fetch_array($result))
    {    $result1=strlen($row['Password']); 
		 $result2 = $row['ESSID'];
		
        $passpoint = array("y" => $result1, "label"=> $result2);
        
        array_push($data_points, $passpoint);        
    };
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
	
	
	
	
}
mysqli_close($con);

?>