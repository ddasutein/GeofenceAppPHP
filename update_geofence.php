<?php

include '../DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $geofenceID = $_POST['getGeofenceID'];
 $geofenceName = $_POST['getGeofenceName'];
 $geofencePhone = $_POST['getGeofencePhone'];
 $geofenceEmail = $_POST['getGeofenceEmail'];
 $geofenceAddress = $_POST['getGeofenceAddress'];
 $geofenceDescription = $_POST['getGeofenceDescription'];
 
 $Sql_Query = "UPDATE geofence_list SET geof_name = '$geofenceName', geof_phone = '$geofencePhone', geof_email = '$geofenceEmail', geof_address = '$geofenceAddress', geof_description = '$geofenceDescription' WHERE geofence_id = '$geofenceID'";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Inserted Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>