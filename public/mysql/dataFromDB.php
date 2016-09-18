<?php
include 'dbconnection.php';
$n_records = $_POST['n_records'];
$result = mysqli_query($connect_todb, 
	"SELECT `voltage_med1`, `curr_med1`, `power_med1`, `latitude`, `longitude` FROM `metcentraldata` ORDER BY id DESC LIMIT $n_records;"
);
 //create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
//send json JData variable to javascript script 
echo 'JData = ', json_encode($emparray),
     ';';
?>