<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="hava2.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
	<title></title>
</head>
<body style="background: linear-gradient(to right, #FF4B2B, #FF416C);">
	<?php
	include 'conexion.php';
	session_start();
	$_SESSION['use']=$_REQUEST['us'];
	echo "<div id='todos'>";
	echo "<div class='letras'>";
	include "ubicaciones.php";
	echo "</div></div>";
	echo "<center> <div id='medio' class='medio'> <h2>Descripción</h2>
        <p id='descri'></p>
        </div></center>" ;
	//Que enseñe solo la ubicacion de casa/movil/otro
	echo "<div class= 'mapacontac' id='mapid' style='width: 400px;float: right;' ></div>";
	?>
</body>
</html>