 <?php

$connect_todb = new mysqli('127.8.155.130:3306','adminPzF8gsR','GsuEhey1gyxX','trackmypower');  
 $output = '';  
 if(isset($_POST["export_excel"]))  
 {  
      $sql = "SELECT * FROM metcentraldata ORDER BY id DESC";  
      $result = mysqli_query($connect_todb, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" bordered="1">  
                     <tr>  
                          <th>id</th>
                          <th>temperature</th>
                          <th>wind_speed</th>
                          <th>voltage_med1</th>
                          <th>curr_med1</th>
                          <th>energy_med1</th>
                          <th>power_med1</th>
                          <th>latitude</th>
                          <th>longitude</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          
                          <td>'.$row["id"].'</td>
                          <td>'.$row["temperature"].'</td>
                          <td>'.$row["wind_speed"].'</td>
                          <td>'.$row["voltage_med1"].'</td>
                          <td>'.$row["curr_med1"].'</td>
                          <td>'.$row["energy_med1"].'</td>
                          <td>'.$row["power_med1"].'</td>
                          <td>'.$row["latitude"].'</td>
                          <td>'.$row["longitude"].'</td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=download.xls");  
           echo $output;  
      }  
 }  
?>  