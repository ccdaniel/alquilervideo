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
					echo "BIENVENIDO" ;		
				}else{    
					$query ="INSERT INTO cliente VALUES ('$cedula','$nombre','$telefono')";
					mysql_query($query,$con) or die (mysql_error());
					echo "NUEVO CLIENTE";
				}
		   
		  
	       //echo $cedula ;
           //echo "<br>"; 
	       //echo $telefono; 
	       //echo  "<br>"; 
	       //echo $nombre ;
	   }
?>