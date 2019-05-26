<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("head.php");?>
 <!-- 
  <title>Calculadora Precio Venta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  -->
</head>
<body>
<?php include("navbar.php");?>
<div class="container">

  <h1>Calculadora Precio de venta</h1>


<script>
function calculop(){
    
    var a = document.f1.a.value;
    var b = document.f1.b.value;
    var d = document.f1.d.value;
  	var r = document.f1.c.value;
    var r0 = document.f1.e.value;
	
	r=parseFloat(a)*(100/(100-parseFloat(b)))*(1+parseFloat(d)/100);
   	document.f1.c.value=r;

  r0=parseFloat(a)*(100/(100-parseFloat(b)))-parseFloat(a)
    document.f1.e.value=r0;

}



</script> 



<form name="f1" action="calprev.php" method="POST">
    <div class="form-group">
    	
    <label for="numero1">Precio Compra:</label>
    <input type="text" class="form-control" id="a" placeholder="Ingrese un Precio del producto" name="a">
	
    <br>
    <label for="numero2">Porcentaje de Utilidad:</label>
    <input type="text" class="form-control" id="b" placeholder="Ingrese Porcentaje de Utilidad" name="b">
    <br>
	
    <br>
    <label for="numero3">Porcentaje de Impuesto:</label>
    <input type="text" class="form-control" id="d" placeholder="Ingrese Porcentaje de Impuesto" name="d">
    <br>

	
	
   <input type="Button" name="" value="calcular" onclick="calculop()" class="btn btn-success">
   <input type="Button" name="" value="Limpiar" onclick="reset()" class="btn btn-primary">
	<br><br>
  <label for="resultado">Precio de venta:</label>
  <input type="text" class="form-control" id|="c" name="c" placeholder="Aquí se imprime el resultado">

  <br>
  <label for="resultado">Utilidad:</label>
  <input type="text" class="form-control" id|="e" name="e" placeholder="Utilidad">



	</div>

  	</form>


      
</div>
<?php include("footer.php");?>
</body>
</html>
