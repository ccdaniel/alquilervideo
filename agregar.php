<?php
     if(isset ($_GET['id']) && !empty ($_GET['id'])){
	     include ("conexion.php");
	     $con = mysql_connect($host,$user,$pw) or die ("error al conectar");
		mysql_select_db($bd,$con) or die ("error al conectar la bd");
		$id         = $_GET['id'];
		$nombre     = $_GET['nombre'];
		$descrip    = $_GET['descrip'];
		$cantidad   = $_GET['cantidad'];
		$precio     = $_GET['precio'];
		$plataforma = $_GET['plataforma'];
	 
		$queryagrega =  "INSERT INTO videojuegos VALUES ('$id','$nombre','$descrip','$cantidad','$precio','$plataforma')";
	
		mysql_query($queryagrega,$con) or die ("error en los datos ingresados".mysql_error());
	
	
		mysql_close()			 
	 }
	 else {
		 echo "error no ingreso id";
	 }
?>
     <html>
		<head><title>ALQUILER DE VIDEOJUEGOS</title></head>
		<body text = "white" bgcolor = "black">
	         <a href='administrador.php'>ACTUALIZACION EXITOSA VOLVER</a> 
        </body>
     </html>