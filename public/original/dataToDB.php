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
$date_time = date("Y-m-d h:i:s", strtotime($timestamp));
echo $date_time . "\n";
//mysql query --> insert data into db
if ($timestamp == 0) {
	echo 'Wrong date-time received from Arduino'."<br>";
	$query = "SET  SESSION time_zone = '-5:00';";
	$query .= "INSERT INTO `metcentraldata` (`id`, `date_time`, `temperature`, `humidity`, `wind_speed`, `voltage_med1`, `curr_med1`, `energy_med1`, `power_med1`, `latitude`, `longitude`) VALUES (NULL, NOW(), '$temperature', '$humidity', '1', '$voltage_med1', '$current_med1', '$energy_med1', '$power_med1', '$latitude', '$longitude');";
	$result = mysqli_multi_query($connect_todb,$query);
}
else
{
	echo 'Right date-time received Arduino'."<br>";
	$result = mysqli_query($connect_todb,
	"INSERT INTO `metcentraldata` (`id`, `date_time`, `temperature`, `humidity`, `wind_speed`, `voltage_med1`, `curr_med1`, `energy_med1`, `power_med1`, `latitude`, `longitude`) VALUES (NULL, '$date_time', '$temperature', '$humidity', '1', '$voltage_med1', '$current_med1', '$energy_med1', '$power_med1', '$latitude', '$longitude');");
}

$data = file_get_contents("https://www.wunderground.com/personal-weather-station/dashboard?ID=IATLNTIC4#history");

//WIND SPEED
if ( preg_match('|<div id="windCompassSpeed" class="wx-data" data-station="IATLNTIC4" data-variable="wind_speed">\s+<h4><span class="wx-value">\s+(.*?)\s+</span>\s+</h4>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $windspeed=$cap[1];
        echo 'Wind Speed = '.$windspeed.'.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
        echo ' ';

} 

//UV INDEX
if ( preg_match('|<div class="small-7 medium-6 columns">UV:</div>\s+<div class="small-5 medium-6 columns">(.*?)\s+<div id="uv_dots"></div></div>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $uvindex=$cap[1];
        echo 'UV Index = '.$uvindex.'.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
} 

//SOLAR RADIATION
if ( preg_match('|<span class="wx-data" data-station="IATLNTIC4" data-variable="solarradiation">\s+<span class="wx-value">(.*?)</span>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $solarradiation=$cap[1];
        echo 'Solar radiation = '.$cap[1].'.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
} 

//TEMPERATURE
if ( preg_match('|<span class="wx-data" data-station="IATLNTIC4" data-variable="temperature">\s+<span class="wx-value">(.*?)</span>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $temperature=$cap[1];
        echo 'Temperature = '.$temperature.' C.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
} 

//HUMIDITY
if ( preg_match('|<span class="wx-data" data-station="IATLNTIC4" data-variable="humidity">\s+<span class="wx-value">(.*?)</span><span class="wx-unit">%</span>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $humidity=$cap[1];
        echo 'Humidity = '.$humidity.'%.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
}
$queryw = "SET  SESSION time_zone = '-5:00';";
$queryw .= "INSERT INTO `wundergrounddata` (`id`, `date_time`, `temperature`, `humidity`, `wind_speed`, `uv_index`, `solar_radiation`) VALUES (NULL, NOW(), '$temperature', '$humidity', '$windspeed', '$uvindex', '$solarradiation');";

$resultw = mysqli_multi_query($connect_todb,$query);


echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
?>
<!--
WEBSITE:
http://track-mypower.rhcloud.com/database/dataToDB.php?user=mpardo&pssd=pardo1234&
-->