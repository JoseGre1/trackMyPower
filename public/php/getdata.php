<?php
include 'dbconnection.php';
$result = mysqli_query($connect_todb, "SELECT latitude, longitude, time FROM `whereismyautogen` ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row["latitude"], ' ', $row["longitude"],' ',$row["time"];
?>