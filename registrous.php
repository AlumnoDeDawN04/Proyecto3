<?php
include "conexion.php";

$name=$_REQUEST['nombre'];
$pass=$_REQUEST['pass'];
$confpass=$_REQUEST['confpass'];
$encript=md5($pass);
$sql = "SELECT * from usuario where nombre='$name'";
$result = mysqli_query($conn, $sql);

if ($pass!='' && $confpass!='' && $pass!=$confpass) {
	echo "<center><h2>Las contraseñas no coinciden</h2></center>";
  	echo "<br>";
  	echo "<center><h3><a href='./registro.php'>Ir a registrarse</a></h3></center>";
}else{
	if(mysqli_num_rows($result)>0)
 {
	 // Si es mayor a cero imprimimos que ya existe el usuario
  	echo "<center><h2>Ya existe el usuario, por favor cambia el nombre</h2></center>";
  	echo "<br>";
  	echo "<center><h3><a href='./registro.php'>Ir a registrarse</a></h3></center>";
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$sql2 = "INSERT INTO usuario(nombre, pwd)VALUES ('$name', '$encript')";
if (mysqli_query($conn, $sql2)) {
	// Imprimimos que se ingreso correctamente
	echo "<center><h2>Nuevo Registro Creado Exitosamente.</h2></center>";
	echo "<br>";
	echo "<center><h3><a href='./login.php'>Ir a iniciar sesión</a></h3></center>";
} else {
	// Mostramos si hay algun error al insertar registro
	echo "Error: " . $sql2 . "" . mysqli_error($conn);
}
//Si no está configurada la variable del formulario del login vuelve al index.php
}
}



?>