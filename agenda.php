<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="java1.js"></script>
	<script type="text/javascript" src="filtro.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<section class="wrapper">
	<nav>
		<ul>
			<li><form  class="filtross" style="padding: 20px 10px; " onsubmit="consultar(); return false">
			<input type="text" id="contacto" autofocus placeholder="Contacto..." onkeyup="consultar(this.value)">
			<input type="submit" name="Buscar" value="Buscar">
		</form></li>
<li class="agenda"><a href="logout.proc.php"><i style="margin-right: 10px;" class="fas fa-sign-out-alt"></i>Salir de la sesion</a></li>
<li><a href="todas.php"><i style="margin-right: 10px;" class="fas fa-address-card"></i> Ver ubicaciones</a></li>
<li><a href="anadir.php"><i style="margin-right: 10px;" class="fas fa-address-book"></i> Anadir contacto</a></li>
<li><a href="editusuario.php"><i style="margin-right: 10px;" class="fas fa-address-book"></i> Editar Perfil </a></li> 	


	</ul>
</nav>
</section>
</head>
<body>
	<?php
		include 'conexion.php';
		session_start();
		if (!$_SESSION['id'] && !$_SESSION['nombre']) {
			header("location:index.php");
		}else{

		}
	?>
</body>
<!--Aqui mostramos la tabla con los contactos de cada usuarios -->
<div class="table" id="resultado"></div>
</html>