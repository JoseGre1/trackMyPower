<?php
	$connect_todb = new mysqli("localhost","root","uninorte","trackmypower");
	$startdate = $_POST["startdate"];
	$enddate = $_POST["enddate"];
	$startdate = date("Y-m-d H:i:s", strtotime($startdate));
	$enddate = date("Y-m-d H:i:s", strtotime($enddate));
	$result = mysqli_query($connect_todb, 
	"SELECT `id`, `date_time`, `temperature`, `wind_speed`, `voltage_med1`, `curr_med1`, `energy_med1`, `power_med1`, `latitude`, `longitude` FROM `metcentraldata` WHERE `date_time` BETWEEN '$startdate' AND '$enddate'"
	);
	$emparray = array();
	
	while($row =mysqli_fetch_assoc($result))
	{
    	$emparray[] = $row;
	}
	echo json_encode($emparray);
 ?>