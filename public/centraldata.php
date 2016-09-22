<?php


  $variable = $_POST["variable"];
  $connect_todb = new mysqli('localhost','root','uninorte','trackmypower');
  $output = '';
    if($variable=="gauge-text"){
    $result = mysqli_query($connect_todb, "SELECT * FROM `metcentraldata` ORDER BY `id` DESC LIMIT 1");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $output =$row["voltage_med1"];
    echo $output; 
    }
    else{
    $result = mysqli_query($connect_todb, "SELECT $variable FROM `metcentraldata` ORDER BY `id` DESC LIMIT 1");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $output .="&nbsp;&nbsp;&nbsp;&nbsp;".$row[$variable];
    echo $output; 
    }
?>