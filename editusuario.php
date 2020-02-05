<?php 
session_start();
$iduser=$_SESSION['id'];
$name=$_SESSION['nombre'];
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="java.js"></script>
	<title></title>
</head>
<body>
	<!-- BOTON DE CERRAR SESION DE USUARIO -->
<div style="text-align: right;">
		<?php
		include 'conexion.php';
		//Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada

		if(isset($_SESSION['id'])){
			echo "<a href='./proc/logout.proc.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;<br>";
		}else{
			header("Location: ./index.php");
		}
		?>
	</div> 
<H1>EDITA TU USUARIO</H1>
<form action="editperfil.php" onsubmit="editusu();">
	USUARIO: <input type="text" name="nombre" id="nombre" value="<?php echo $name ?>"><br><br>  
	PASSWORD: <input type="password" name="pass" id="pass" value=""><br><br> 
	CONFIRMAR PASSWORD: <input type="password" name="confpass" id="confpass" value=""><br><br> 
		</select>
	<?php echo "<input type='hidden' id='id' name='id' value='".$_SESSION['id']."'>";?>
		<input type="submit" name="submit" value="Cambiar"><br><br> 
</form>
<form action="agenda.php">
		<input type="submit" name="Volver" value="Volver a Agenda">
	</form>
</body>
</html>