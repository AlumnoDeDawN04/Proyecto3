<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "conexion.php";
		$us=$_REQUEST['us'];
		$consulta="select nombre,apellidos,mail,direccion,telefono,id_agenda from agenda where id_agenda=".$us;
		$query=mysqli_query($conn,$consulta);
		$exe=mysqli_fetch_array($query);
		echo "<form action='modusu.php' method='POST' name='formusu' enctype='multipart/form-data'>";
		echo "Nombre: <input type='string' name='nombre' value='".$exe[0]."'>";
		echo "Apellidos: <input type='string' name='apellidos' value='".$exe[1]."'>";
		echo "Mail: <input type='mail' name='mail' value='".$exe[2]."'>";
		echo "Direccion: <input type='string' name='direccion' value='".$exe[3]."'>";
		echo "Telefono: <input type='number' name='telefono' value='".$exe[4]."'>";
		echo "<input type='id' style='display:none;' name='id' value='".$us."'>";
		echo "<input type='submit' name='submit' value='Modificar Usuario'>";
		echo "</form>";
	?>
</body>
</html>