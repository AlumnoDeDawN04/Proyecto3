<!DOCTYPE html>
<html>
<head>
	<title>Página de registro</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <script type="text/javascript" src="java.js"></script>
</head>
<body>
  <!-- formulario de registro -->
  <center><h1 style="margin-top: 5%; margin-left: -50%; color: black; width: 40%;border-radius: 10px;">Registrarse</h1></center><br>
    <div class="container" id="container" style="background: linear-gradient(to right, #FF4B2B, #FF416C);">
  <div style="margin-left: 25%;" class="form-container sign-in-container">
    <div>
  	<p style="color: white;" id="mensaje" class="mensaje"></p>
  	<form method="POST" action="./registrous.php" onsubmit="validation()">
      <h4>Name</h4>
      <input type='text' name='nombre' id='nombre' placeholder='Nombre' required>
      <h4>Contraseña</h4>
      <input type='password' name='pass' id='pass' placeholder='Contraseña' required>
      <input type='password' name='confpass' id='confpass' placeholder='Confirmar contraseña' required>
<?php 
include "conexion.php";
       ?>
      
    <button class="registro" pattern='[A-Za-z0-9_-]{1,15}' type="submit" name="Enviar">Registrarse</button> 
  </form>
  <form action="index.php">
    <button class="registro" pattern='[A-Za-z0-9_-]{1,15}'><a class="registro" href="index.php">Ir a iniciar sesión</a></button>
    <br>
  </form>
</div>
  </div>
 </div>
</body>
</html>