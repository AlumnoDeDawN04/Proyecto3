<?php
include 'conexion.php';
$id=$_REQUEST['id'];
$name=$_REQUEST['nombre'];
$pass=$_REQUEST['pass'];
$encript=md5($pass);
$confpass=$_REQUEST['confpass'];
$encript2=md5($confpass);

if ($encript!=$encript2) {
	echo "<center><h2>Las contraseñas no coinciden</h2></center>";
  	echo "<br>";
  	echo "<center><h3><a href='./editusuario.php?id=".$id."'>Volver atras</a></h3></center>";
} else if ($encript!='' || $encript2!=''){
	echo "<center><h2>Tienes campos sin rellenar</h2></center>";
  	echo "<br>";
  	echo "<center><h3><a href='./editusuario.php?id=".$id."'>Volver atras</a></h3></center>";
}else{
	$qry="UPDATE usuario SET nombre = '$name', pwd='$encript'  WHERE id = $id";
	$result=mysqli_query($conn,$qry);
	header("Location: index.php");
}

?>