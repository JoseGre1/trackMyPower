<?php
	include 'dbconnection.php';
	//$startdate = $_POST["startdate"];
	//$enddate = $_POST["enddate"];
	//$startdate = date("Y-m-d H:i:s", strtotime($startdate));
	//$enddate = date("Y-m-d H:i:s", strtotime($enddate));
	//$result = mysqli_query($connect_todb, 
	//	"SELECT * FROM metcentraldata WHERE `date_time` BETWEEN '$startdate' AND '$enddate' ORDER BY id DESC"
	//);
	$result = mysqli_query($connect_todb, 
		"SELECT * FROM metcentraldata ORDER BY date_time DESC"
	);
	 //create an array
	$emparray = array();
	while($row =mysqli_fetch_assoc($result))
	{
	    $emparray[] = $row;
	}
	//send json JData variable to javascript script 
	$echovar = 'JData = '.json_encode($emparray).';';
	echo $echovar;
?>