<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("head.php");?>
</head>
<body>
<?php include("navbar.php");?>
<div class="container">

  <h1>Venta</h1>

<form name="f2" action="venta.php" method="POST">
    <div class="form-group">
    	
    <label for="campo1">código de producto:</label>
    <input type="text" class="form-control" id="a" placeholder="Ingrese código de producto" name="a">
	
    <br>
    <label for="campo2">valor de la venta:</label>
    <input type="text" class="form-control" id="b" placeholder="Ingrese valor de la venta" name="b">
    <br>
	
    <br>
    <label for="campo3">cantidad vendida.:</label>
    <input type="text" class="form-control" id="d" placeholder="Ingrese cantidad vendida." name="d">
    <br>
  
	
  <!--
   <input type="Button" name="" value="calcular" onclick="calcularp()" class="btn btn-success">
   <input type="Button" name="" value="Limpiar" onclick="reset()" class="btn btn-primary">
	
  <br><br>
  <label for="resultado">Precio de venta:</label>
  <input type="text" class="form-control" id="c" name="c" placeholder="Aquí se imprime el resultado">
-->


	</div>

  	</form>
      
</div>
<?php include("footer.php");?>
</body>
</html>
