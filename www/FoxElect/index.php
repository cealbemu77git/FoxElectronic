<html>

<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_Index="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="Eaglesoft";
?>
  <head>
	<?php include("head.php");?>
  </head>
  <body>
	<?php include("navbar.php");?>
	  
	<footer>
		<?php include("footer.php");?>
	</footer>
  </body>
</html> 