<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');
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
$date_time = date("Y-m-d H:i:s", strtotime($timestamp));
//mysql query --> insert data into db
$result = mysqli_query($connect_todb, 
	"INSERT INTO `metcentraldata` (`id`, `date_time`, `temperature`, `humidity` `wind_speed`, `voltage_med1`, `curr_med1`, `energasasay_med1`, `power_med1`, `latitude`, `longitude`) VALUES (NULL, '$date_time', '$temperature', '$humidity', '0' ,'$voltage_med1', '$current_med1', '$energy_med1', '$power_med1', '$latitude', '$longitude');"
);
$row = mysqli_fetch_array($result);
echo $row;
?>
<!--
WEBSITE:
http://trackmypower-sharkmeter.rhcloud.com/dataToDB.php?user=mpardo&pssd=pardo1234&
-->