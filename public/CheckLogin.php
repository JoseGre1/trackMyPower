
<?php
$connect = mysqli_connect("localhost", "mpardo", "pardo1234", "trackmypower");


$usr = "admin";
$psw = "password";
$username = $_POST["username"];
$password = $_POST["password"];

$sql= "SELECT username, password FROM account where username='".$_POST["username"]."'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);  
session_start();
if (mysqli_num_rows($result) > 0 && $_POST['username']==$row['username'] && $_POST['password']==$row['password']) {
  
    header("Location: Home.php");}
else { 
header("Location: index.html");
//echo "error en usuario y/o contraseña"
}
 ?> 
