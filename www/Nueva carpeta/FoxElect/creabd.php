<?php 
	require_once("config/db.php");

	$con = mysqli_connect($nombreServidor, $nombreUsuario, $contraseña);
	$conecion;
	if (!$con) {
		echo 'no se conecto a la base de datos por: '. mysqli_connect_error();			
		echo "<br>";
	}else{
		echo  "conexion correcta";
		echo "<br>";
	}
	$base;
	$database = 'CREATE DATABASE bdunad32';
	if (mysqli_query($con, $database)) {
    	echo "La base de datos bdunad32 se creó correctamente";
    	echo "<br>";    	
	}else{
    	echo 'Error al crear la base de datos';
    	echo "<br>";
    	echo 'o ya se creo por favor confirmar si ya creo la base de datos o si esta conectado al servidor';
    	echo "<br>";
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Creacion de la base de datos</title>
 </head>
 <body>
 	<a href="../index.php" >Volver a la pagina principal</a>
 </body>
 </html>
 