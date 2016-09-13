 <html>  
      <head>  
           <title>esta shi a xls</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
             <h2 align="center">Ciaossu!</h2><br />    
             <form method="post" action="xls.php">  
              <button onclick="conta()" name="export_excel" class="btn btn-success" value="Descargar excel"	>export_excel</button>
              <br>
              <br>
              <!-- This comment will appear in the new push shit

              -->

              <input type="hidden"  id="para1" name="para1">
              <input type="hidden"  id="para2" name="para2">
              <input type="hidden"  id="para3" name="para3">
              <input type="hidden"  id="para4" name="para4">
              <input type="hidden"  id="para5" name="para5">
              <input type="hidden"  id="para6" name="para6">
              <input type="hidden"  id="para7" name="para7">
              <input type="hidden"  id="para8" name="para8">
              <input type="hidden"  id="para9" name="para9">

              <input type="checkbox" id="par1" name="par1" value="id"> ID<br>
              <input type="checkbox" id="par2" name="par2" value="temperature"> Temperature<br>
              <input type="checkbox" id="par3" name="par3" value="wind_speed"> Velocidad del viento<br>
              <input type="checkbox" id="par4" name="par4" value="voltage_med1"> Voltage medidor 1<br>
              <input type="checkbox" id="par5" name="par5" value="curr_med1"> Corriente medidor 1<br>
              <input type="checkbox" id="par6" name="par6" value="energy_med1"> Energia/Vatios hora<br>
              <input type="checkbox" id="par7" name="par7" value="power_med1"> Potencia<br>
              <input type="checkbox" id="par8" name="par8" value="latitude"> Latitud<br>
              <input type="checkbox" id="par9" name="par9" value="longitude"> Longutud<br>
              <br>
             </form>
			 <br>
            <script>
				function conta() {
 					for(var i= 1 ; i<10 ; i++){
 						if(document.getElementById("par"+i).checked==false){
 							document.getElementById("para"+i).value=0;
 						}
 						else{
 							document.getElementById("para"+i).value=document.getElementById("par"+i).value;	
 						}
 					}
				}

			</script>


      </body>  
 </html>  