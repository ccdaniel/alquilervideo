

     <html>
	      
		  <body text = "white" bgcolor = "black">
     <?php
      include ("conexion.php");
	  if(isset ($_GET['nombres']) && !empty ($_GET['nombres'])){
		  
	      $nombre   = $_GET['nombres'];  // nombres es el nombre de la caja de texto
          $cedula   = $_GET['cedula'];  // apellidos es el nombre de la caja de texto
          $telefono = $_GET['telefono'];
		  $con = mysql_connect($host,$user,$pw) or die ("error al conectar");
		  mysql_select_db($bd,$con) or die ("error al conectar la bd");
		  
		  $query = "SELECT cedula FROM cliente WHERE cedula ='$cedula'";
          $registro = mysql_query($query,$con) or die (mysql_error());//selecciona cedulas iguale
          $nreg = mysql_num_rows($registro);
                if ($nreg > 0 ){
					echo "<center><h3> BIENVENIDO </h3></center>" ;		
					
				}else{    
					$query ="INSERT INTO cliente VALUES ('$cedula','$nombre','$telefono')";
					mysql_query($query,$con) or die (mysql_error());
					echo "NUEVO CLIENTE";
				}
		  
		   //cargar tabla videojuegos
		      $consulta = mysql_query("SELECT * FROM videojuegos") or die ("error en consulta".mysql_error());
			  
			  
	       //echo $cedula ;
           //echo "<br>"; 
	       //echo $telefono; 
	       //echo  "<br>"; 
	       //echo $nombre ;
	   }
       ?>
	      <br><br>	
		  <table border="1">
		     <?php 
			    while ($reg =mysql_fetch_array($consulta)){
					
					echo "<tr>";
					           echo "<td><img src='img/",$reg['id']; echo".jpg' width = '150px' height = '150px' /></td>";
				               echo "<td> <b>TITULO: <H2> ",$reg['nombre']; echo"</b></H2></td>";
							   echo "<td> <b>DESCRIPCION : </b>",$reg['descripcion']; echo"</td>";
							   echo "<td> <b>PRECIO : </b>",$reg['precio']; echo"</td>";
							   echo "<td> <b>CANTIDAD : </b>",$reg['cantidad']; echo"</td>";
				               echo "<td> <a href='alquilar.php?a=$reg[id]&b=$cedula' >ALQUILAR</a></td>";
			        echo "</tr>";
					
				}
			 mysql_close()		
		     ?>
		    
			    
			 
             
			
          </table> 
		  </body>
	  </html>
