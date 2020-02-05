<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="java1.js"></script>
	 <link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Registro de contacto</title>
</head>
<body>
<?php
	include 'conexion.php';
		session_start();
		if (!$_SESSION['id'] && !$_SESSION['nombre']) {
			header("location:login.php");
		}else{
			?>	
				<center><h2><a href="logout.proc.php">Salir de <?php echo $_SESSION['nombre']; ?></a></h2> </center>
  <!-- formulario de registro de contactos -->
  <center><div> 
    <div style="background: linear-gradient(to right, #FF4B2B, #FF416C);" class="containercontact" id="containercontact">
  <div class="form-container sign-in-container">
    <div style="margin-top: -6%;">
  	<p style="color: white;" id="mensaje" class="mensaje"></p>
  	<form style="background: linear-gradient(to left, #FF4B2B, #FF416C);"  method="POST" action="./agenda.php" onsubmit="anadir()">
      <h3>Nombre</h3>
      <input style="width: 60%;" type='text' name='user' id='user' placeholder='Nombre...' required>
      <h3>Apellidos</h3>
      <input style="width: 60%;" type='text' name='ape' id='ape' placeholder='Apellidos...' required>
      <h3>Correo Electrónico</h3>
      <input style="width: 60%;" type='email' name='mail' id='mail' placeholder='Correo...' required>
      </div>
      <div style="margin-left: 135%;" class="form-container sign-in-container">
      <h3>Adreça</h3>
      <input type='text' name='dir' id='dir' placeholder='Adreça...' required>
      <h3>Teléfono</h3>
      <input type='number' name='tel' id='tel' placeholder='Teléfono...' required><br>
    </div>

    <input style="width: 30%; margin-left: 90%;margin-top: 10%;" pattern='[A-Za-z0-9_-]{1,15}' type="submit" name="Enviar" value="Añadir" >
  </form>
  </div></center>
 </div></div>
			<?php
		}
?>
</body>
</html>