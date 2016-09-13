 <?php
 $connect = mysqli_connect("localhost", "root", "", "trackmypower");    
 $output = '';  

 if(isset($_POST["export_excel"]))  
 {  
      $sql = "SELECT * FROM metcentraldata ORDER BY id DESC";  
      $result = mysqli_query($connect, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {     

       $output .= ' <table class="table" bordered="1">  
                     <tr> ';
          for($i=1;$i<10;$i++){
            if($_POST['para'.$i]!='0'){
                
                $output .='<th>'.$_POST['para'.$i].'</th>';
            }
          }        
           $output .='</tr>';  


           while($row = mysqli_fetch_array($result))  
           {         $output.='<tr>
                  ';
                      for($i=1;$i<10;$i++){
                          if($_POST['para'.$i]!='0'){
                              
                              $output .='<td>'.$row[$_POST['para'.$i]].'</td>';
                          }
                      }    
                        $output.='</tr>';
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=download.xls");  
           echo $output;  
      }  
 }  
?>  