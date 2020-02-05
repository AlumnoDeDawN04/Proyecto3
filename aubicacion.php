<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="java1.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
	<title></title>
</head>
<body>
<?php
	include 'conexion.php';
		session_start();
		if (!$_SESSION['id'] && !$_SESSION['nombre']) {
			header("location:index.php");
		}else{
			$user=$_REQUEST['us'];
			echo "<a href='agenda.php?us='".$user.">Volver atras</a>";
			?>	

				<h3>Anadir ubicacion</h3>
				<form action="#" method="POST" name="formulariologin" enctype="multipart/form-data" onsubmit="anadirubi()">
					<label>Ubicacion:</label><select name="tipo" id="tipo"><option value="casa">Casa</option><option value="movil">Movil</option><option value="otro">Otro</option></select><br><br>
					<input type="string" style="display: none;" name="x1" id="x1" default="">
					<input type="string" style="display: none;" name="y1" id="y1" default="">
					Descripcion:<input type="string" name="desc" id="desc" default="">
					<?php
						$user=$_REQUEST['us'];
						echo "<input style='display:none;' class='hidden' type='text' id='hidden' value='".$user."'>";
					?>
					<input  class="btnenviar" type="submit" name="registro" default="" value="Registrar Ubicacion">
					<div id="mapid" style="width: 600px; height: 400px;"></div>
				</form>
			<?php
		}
?>
</body>
</html>