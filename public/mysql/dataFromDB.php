<?php
include 'dbconnection.php';
$result = mysqli_query($connect_todb, 
	"SELECT `voltage_med1`, `curr_med1`, `power_med1`, `latitude`, `longitude` FROM `metcentraldata` ORDER BY id DESC LIMIT 10;"
);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row["voltage_med1"], ',', $row["curr_med1"],',',$row["power_med1"],',',$row["latitude"],',',$row["longitude"];
?>