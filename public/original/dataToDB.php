<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');
echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
//obtain data from arduino
$voltage_med1  = htmlspecialchars($_GET["voltage"]);
$current_med1 = htmlspecialchars($_GET["current"]);
$energy_med1 = htmlspecialchars($_GET["energy"]);
$power_med1 = htmlspecialchars($_GET["power"]);
$latitude = htmlspecialchars($_GET["latitude"]);
$longitude = htmlspecialchars($_GET["longitude"]);
$timestamp = htmlspecialchars($_GET["date_time"]);
$temperature = htmlspecialchars($_GET["temperature"]);
$humidity = htmlspecialchars($_GET["humidity"]);
//change datetime string --> date SQL format
//$date_time = date("Y-m-d h:i:s", strtotime($timestamp));
//mysql query --> insert data into db
$result = mysqli_query($connect_todb,
	"INSERT INTO `metcentraldata` (`id`, `date_time`, `temperature`, `humidity`, `wind_speed`, `voltage_med1`, `curr_med1`, `energy_med1`, `power_med1`, `latitude`, `longitude`) VALUES (NULL, '2016-09-15 01:02:03', '4', '5', '6', '7', '8', '9', '10', '11', '12');"
);
echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
?>
<!--
WEBSITE:
http://track-mypower.rhcloud.com/database/dataToDB.php?user=mpardo&pssd=pardo1234&
-->