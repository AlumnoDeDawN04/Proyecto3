<?php
include "conexion.php";
	session_start();
	$nombre=$_REQUEST['us'];
	$consulta1="delete from direccion where direccionado=".$nombre;
	$query=mysqli_query($conn,$consulta1);
	$consulta2="delete from agenda where id_agenda=".$nombre;
	$query=mysqli_query($conn,$consulta2);
?>