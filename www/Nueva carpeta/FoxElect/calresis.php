<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("head.php");?>
 <!-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 --> 
</head>
<body>
<?php include("navbar.php");?>
<div class="container">

  <h1>Calculadora de resistencias</h1>


<script>
function calcular(){
    
    var a = document.f1.b1.value;
    var b = document.f1.b2.value;
    var x = document.f1.b3.value;
    var r = document.f1.c.value;
    r1= a.toString()+b.toString();
    r=parseFloat(r1)*parseFloat(x);
   document.f1.c.value=r;
    
}

</script> 



<form name="f1" action="resistencia.html" method="POST">
    

 <h3>Banda 1</h3>     
<select name="b1" class="form-control">
  <option value="0" >Negro</option>
  <option value="1" >Marron</option>
  <option value="2" >Rojo</option>
  <option value="3" >Naranja</option>
  <option value="4" >Amarillo</option>
  <option value="5" >Verde</option>
  <option value="6" >Azul</option>
  <option value="7" >Violeta</option>
  <option value="8" >Gris</option>
  <option value="9" >Blanco</option>
  <option value="10" >Dorado</option>
  <option value="11" >Plateado</option>  
</select>

<br>

 <h3>Banda 2</h3> 
<select name="b2" class="form-control">
  <option value="0" >Negro</option>
  <option value="1" >Marron</option>
  <option value="2" >Rojo</option>
  <option value="3" >Naranja</option>
  <option value="4" >Amarillo</option>
  <option value="5" >Verde</option>
  <option value="6" >Azul</option>
  <option value="7" >Violeta</option>
  <option value="8" >Gris</option>
  <option value="9" >Blanco</option>
  <option value="10" >Dorado</option>
  <option value="11" >Plateado</option>  
</select>

<br>

<h3>Banda 3</h3> 
<select name="b3" class="form-control">
  <option value="1" >Negro</option>
  <option value="10" >Marron</option>
  <option value="100" >Rojo</option>
  <option value="1000" >Naranja</option>
  <option value="10000" >Amarillo</option>
  <option value="100000" >Verde</option>
  <option value="1000000" >Azul</option>
  <option value="10000000" >Violeta</option>
  <option value="100000000" >Gris</option>
  <option value="1000000000" >Blanco</option>
  <option value="0,1" >Dorado</option>
  <option value="0,01" >Plateado</option>  
 
  
</select>
 
	<br>
  <input type="Button" name="" value="calcular" onclick="calcular()" class="btn btn-primary">
  <br><br>
  <label for="resultado">Resultado:</label>
  <input type="text" class="form-control" id="c" name="c" placeholder="Aquí se imprime el resultado">

	</div>

  	</form>

      
</div>

<?php include("footer.php");?>

</body>
</html>
