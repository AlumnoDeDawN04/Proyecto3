<?php

session_start();
$iduser = $_REQUEST['us'];
$name = $_REQUEST['name'];
$ape = $_REQUEST['apellidos'];
$dir=$_REQUEST['direccion'];
$telf=$_REQUEST['telf'];
$mail=$_REQUEST['mail'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
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
<form action="editus.php">
	NOMBRE: <input type="text" name="nombre" id="nombre" value="<?php echo $name ?>" required><br><br> 
	APELLIDOS: <input type="text" name="ape" id="ape" value="<?php echo $ape ?>" required><br><br> 
	TELÉFONO: <input type="text" name="telf" id="telf" value="<?php echo $telf ?>" required><br><br> 
	E-MAIL: <input type="text" name="mail" id="mail" value="<?php echo $mail ?>" required><br><br> 
	DIRECCIÓN: <input type="text" name="dir" id="dir" value="<?php echo $dir ?>" required><br><br> 
		</select>
	<?php echo "<input type='hidden' id='id' name='id' value='".$_REQUEST['us']."'>";?>
		<input type="submit" name="submit" value="Cambiar"><br><br> 
</form>
<form action="agenda.php">
		<input type="submit" name="Volver" value="Volver a Agenda">
	</form>
</body>
</html>