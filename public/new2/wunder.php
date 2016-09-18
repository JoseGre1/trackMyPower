<?php
function wunder(){
// Example by deerme.org
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

//CONECTION TO DB 
$user='mpardo';
$pssd='pardo1234';
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');

$query = "SET  SESSION time_zone = '-5:00';";
$query .= "INSERT INTO `wundergrounddata` (`id`, `date_time`, `temperature`, `humidity`, `wind_speed`, `uv_index`, `solar_radiation`) VALUES (NULL, NOW(), '$temperature', '$humidity', '$windspeed', '$uvindex', '$solarradiation');";

$result = mysqli_multi_query($connect_todb,$query);
}
?>


