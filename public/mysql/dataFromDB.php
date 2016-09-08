<?php
include 'dbconnection.php';
$n_records = 10;
$result = mysqli_query($connect_todb, 
	"SELECT `voltage_med1`, `curr_med1`, `power_med1`, `latitude`, `longitude` FROM `metcentraldata` ORDER BY id DESC LIMIT $n_records;"
);
// for ($x = 1; $x<=$n_records; $x++){
// 	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// 	echo $row["voltage_med1"], ',', $row["curr_med1"],',',$row["power_med1"],',',$row["latitude"],',',$row["longitude"], ';';
// }


 //create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
echo json_encode($emparray);

?>