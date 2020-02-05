<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="java3.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
	<title></title>
</head>
<body>
<div id="mapid" style="width: 600px; height: 400px;"></div>
<?php
	session_start();
	$id=$_SESSION['id'];
	include "conexion.php";
	$consulta="select agenda.nombre,direccion.x,direccion.y from usuario inner join agenda on usuario.id=agenda.agendado inner join direccion on agenda.id_agenda=direccion.direccionado where usuario.id=".$id;
	$query=mysqli_query($conn,$consulta);
	while ($exe=mysqli_fetch_array($query)) {
		echo "<br>Ver usuario:".$exe[0];
		echo "<input type='submit' name='ver' id='todas' onclick='ubi("."\"".$exe[0]."\"".","."\"".$exe[1]."\"".","."\"".$exe[2]."\"".")'>";
	}
?>
</body>
</html>
