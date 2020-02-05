<?php
	include "conexion.php";
	$user=$_REQUEST['user'];
	$x=$_REQUEST['x'];
	$y=$_REQUEST['y'];
	$consultaa="delete from direccion where x=".$x." and y=".$y." and direccionado=".$user;
	$query=mysqli_query($conn,$consultaa);
	include "ubicaciones.php";
?>