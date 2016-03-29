<?php
// mysqli MODIFY THIS TO FIT YOUR NEED ***
$servername = "a";
$username = "a";
$password = "a";
$database = "a";
$table = "a";
//create connection
$conn = new mysqli($servername, $username, $password, $database);

//check connection
if ($conn->connect_error) {




        die("Connection failed: " . $conn->connect_error);
}


//display table
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        echo "<table border='2'  >
                <tr>
                        <th>ID</th>
                        <th>Cap.Start</th>
                        <th>Cap.Stop</th>
                        <th>Ch.</th>
                        <th>ESSID</th>
                        <th>BSSID</th>
                        <th>Station</th>
                        <th>WPS</th>
                        <th>WordCount</th>
                        <th>WordTotal</th>
                        <th>Password</th>
                        <th>Crack.Start</th>
                        <th>Crack.Stop</th>
                        <!--<th>testing</th> -->
                </tr>";

        while($row = $result->fetch_assoc()) {//display rows
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["CaptureStarted"]."</td>
                        <td>".$row["CaptureStopped"]."</td>
                        <td>".$row["Channel"]."</td>
                        <td>".$row["ESSID"]."</td>
                        <td>".$row["BSSID"]."</td>
                        <td>".$row["Station"]."</td>
                        <td>".$row["WordPerSec"]."</td>
                        <td>".$row["wordC"]."</td>
                        <td>".$row["wordT"]."</td>
                        <td>".$row["Password"]."</td>
                        <td>".$row["CrackStarted"]."</td>
                        <td>".$row["CrackStopped"]."</td>
                        <!--<td>".strlen($row["Password"])."</td> -->
                </tr>";
                    }
        echo "</table>";
}

else {
        echo "0 results";
}
$conn->close();
?>


