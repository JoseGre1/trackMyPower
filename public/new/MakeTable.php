
<?php
	$connect_todb = new mysqli('localhost','mpardo','pardo1234','trackmypower');

	$enddate = $_POST["enddate"];
	$startdate = $_POST["startdate"];
	//$usr == $username && $psw == $password
	$result = mysqli_query($connect_todb, 
	"SELECT `voltage_med1` FROM `metcentraldata` WHERE date_time BETWEEN $startdate AND $enddate;");
	echo $result
 ?>