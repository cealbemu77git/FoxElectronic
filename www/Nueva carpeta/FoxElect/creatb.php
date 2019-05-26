<?php 
	
	require_once("config/db.php");
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


	$bdunad32 = "CREATE TABLE bdunad32(
				codigo int UNIQUE  PRIMARY KEY NOT NULL,
				Razon_social VARCHAR(50) NOT NULL,
				Email VARCHAR(50) NOT NULL,
				Direcciion VARCHAR (50) NOT NULL,
				fecha DATE NOT NULL
			)engine=InnoDB;";

	if (mysqli_query($con, $bdunad32)) {
		echo "<br>";
		header("location: index.php");
		echo "se creo la tabla bdunad32 correctamente";

	}else {
		echo "no se creo la tabla por:". mysqli_error($con);
		echo "<br>";
	}
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Creacion de la tabla</title>
 </head>
 <body>
 	<a href="../index.php" >Volver a la pagina principal</a>
 </body>
 </html>