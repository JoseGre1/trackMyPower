

<?php


  $variable = $_POST["variable"];
  $connect_todb = new mysqli('127.5.177.130:3306','mpardo','pardo1234','trackmypower');
  $output = '';
  $result = mysqli_query($connect_todb, "SELECT $variable FROM `wundergrounddata` ORDER BY id DESC LIMIT 1");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($variable=="temperature"){
  $output .='<h3 class="degrees">'.$row[$variable].'</h3>';
  echo $output;}
  else{
    $output .='<h3 class="">'.$row[$variable].'</h3>';
    echo $output;  
  }

?>