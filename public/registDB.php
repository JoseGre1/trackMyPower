<?php
$connect_todb = new mysqli('localhost',"mpardo","pardo1234",'trackmypower');
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($connect_todb, "INSERT INTO `account` (`username`, `password`) VALUES ('$username', '$password');"
	);

header("Location: index.php");

 ?>