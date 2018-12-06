<?php

include '../DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $geofence_account_id = $_POST['geofenceAccountID'];
 $geofence_name = $_POST['geofenceName'];
 $geofence_lat = $_POST['geofenceLat'];
 $geofence_lon = $_POST['geofenceLon'];
 $geofence_rad = $_POST['geofenceRad'];
 $geofence_cat = $_POST['geofenceCat'];
 
 $Sql_Query = "insert into geofence_list (account_id, geof_name, geof_latitude, geof_longitude, geof_radius, geof_category) values ('$geofence_account_id','$geofence_name','$geofence_lat','$geofence_lon','$geofence_rad', '$geofence_cat')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Inserted Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>