<?php
     include ("conexion.php");
	 $con = mysql_connect($host,$user,$pw) or die ("error al conectar");
	 mysql_select_db($bd,$con) or die ("error al conectar la bd");
	 $id=$_GET['a'];
     $cedula=$_GET['b'];
	 
	
	 $queryadquila =  "INSERT INTO prestamos VALUES ('$cedula','$id',CURDATE())";
	
	  mysql_query($queryadquila,$con) or die ("error adquilando".mysql_error());
	
	 $modifica = "UPDATE videojuegos SET cantidad = cantidad - 1 WHERE id=$id" ;
	 mysql_query($modifica,$con) or die ("error actualizando".mysql_error());
	 mysql_close()			 
?>
     <html>
		<head><title>ALQUILER DE VIDEOJUEGOS</title></head>
		<body text = "white" bgcolor = "black">
	         <a href='principal.php'>ALQUILER EXITOSO VOLVER</a>
        </body>
     </html>