<?php
include 'dbconnection.php';
$checked_ids = $_POST['checked_ids'];
$result = mysqli_query($connect_todb, 
	"SELECT * FROM `metcentraldata` ORDER BY id"
);
 //create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
//send json JData variable to javascript script 
$echovar = 'JData = '.json_encode($emparray).';';
?>