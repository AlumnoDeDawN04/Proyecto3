<!DOCTYPE html>
<html>
<head>
	<title>Inventario casal</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
	<h3>Iniciar Sesión</h3>
		<form action="comprobarusuarios.php" method="POST" name="formulariologin" enctype="multipart/form-data">
			<label for="user" class="boton">Usuario:</label><br>
			<input type="string" name="user" id="user" default=""><br><br>
			<label for="pwd" class="boton">Contraseña:</label><br>
			<input type="password" name="pwd" id="pwd"><br>
			<input  class="btnenviar" type="submit" name="registro" default="" value="Entrar">
		</form>
</body>
</html>