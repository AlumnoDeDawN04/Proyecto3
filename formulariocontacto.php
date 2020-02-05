<!DOCTYPE html>
<html>
<head>
	<title>Registro de contacto</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
  <?php 
include "conexion.php";
session_start();
    if (!$_SESSION['id'] && !$_SESSION['nombre']) {
      header("location:login.php");
    }else{

    }
       ?>
<center><h2><a href="logout.proc.php">Salir de <?php echo $_SESSION['nombre']; ?></a></h2> </center>
  <!-- formulario de registro de contactos -->
  <center><div> 
    <div style="background: linear-gradient(to right, #FF4B2B, #FF416C);" class="containercontact" id="containercontact">
  <div class="form-container sign-in-container">
    <div style="margin-top: -6%;">
  	<p style="color: white;" id="mensaje" class="mensaje"></p>
  	<form style="background: linear-gradient(to left, #FF4B2B, #FF416C);"  method="POST" action="./registrous.php" onsubmit="validation()">
      <h3>Nombre</h3>
      <input style="width: 60%;" type='text' name='nombre' id='nombre' placeholder='Nombre...' required>
      <h3>Apellidos</h3>
      <input style="width: 60%;" type='text' name='apellidos' id='apellidos' placeholder='Apellidos...' required>
      <h3>Correo Electrónico</h3>
      <input style="width: 60%;" type='email' name='email' id='email' placeholder='Correo...' required>
      </div>
      <div style="margin-left: 135%;" class="form-container sign-in-container">
      <h3>Adreça</h3>
      <input type='text' name='adreca' id='adreca' placeholder='Adreça...' required>
      <h3>Teléfono</h3>
      <input type='number' name='tlf' id='tlf' placeholder='Teléfono...' required><br>
    </div>

    <input style="width: 30%; margin-left: 90%;margin-top: 10%;" pattern='[A-Za-z0-9_-]{1,15}' type="submit" name="Enviar" value="Añadir" >
  </form>
  </div></center>
 </div></div>
</body>
</html>