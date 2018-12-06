<?php


include '../DatabaseConfig.php';

$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);



$result = mysqli_query($con, "SELECT * FROM geofence_list"); 

while($row = mysqli_fetch_assoc($result)){ 
$output[]=$row; 
} 

print(json_encode($output, JSON_PRETTY_PRINT)); 

mysqli_close($con);

?>
