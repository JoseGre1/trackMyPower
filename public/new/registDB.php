<?php
$connect_todb = new mysqli('localhost',"root","",'trackmypower');
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($connect_todb, "INSERT INTO `accounts` (`username`, `password`) VALUES ('$username', '$password');"
	);

header("Location: login2.html");

 ?>