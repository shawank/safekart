<?php

/*$mysqli = new mysqli("localhost", "shawank", "zrrJ8zNEdpuTwuty", "ODS_DB");
if ($mysqli === false) 
{
    echo $mysqli->connect_error;
}
else 
{
    echo "established";
}

 Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "shawank", "zrrJ8zNEdpuTwuty", "ODS_DB");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Print host information
echo "Connect Successfully. Host info: " . $mysqli->host_info; */

?>

