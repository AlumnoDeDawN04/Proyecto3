<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="hava2.js"></script>
	<title></title>
</head>
<body>

<?php
include "conexion.php";
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
$user=$_SESSION['use'];
	$consulta="select x,y,tipo,descripcion,direccionado from direccion where direccionado='".$user."'";
	$query= mysqli_query($conn,$consulta);
	while ($exe=mysqli_fetch_array($query)) {
		echo "<div id='resultado'><br><h3>Ubicacion de ".$exe['tipo'].": </h3><a class='aaa' href='#' onclick='ubi("."\"".$exe[0]."\"".","."\"".$exe[1]."\"".","."\"".$exe[3]."\"".");return false'>Ver</a><br>";
		echo "<a class='aaa' href='#' onclick='eliubi("."\"".$exe[0]."\"".","."\"".$exe[1]."\"".","."\"".$exe[4]."\"".");return false;'>Eliminar ubicacion</a></div>";	
	}
?>
</body>
</html>
