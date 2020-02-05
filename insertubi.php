<?php
include "conexion.php";
	session_start();
	$nombre=$_REQUEST['user'];
	$tipo=$_REQUEST['tipo'];
	$x1=$_REQUEST['x1'];
	$y1=$_REQUEST['y1'];
	$desc=$_REQUEST['desc'];
	$consulta="insert into direccion (tipo,direccionado,x,y,descripcion) values ('".$tipo."','".$nombre."','".$x1."','".$y1."','".$desc."')";
 	$query=mysqli_query($conn,$consulta);
	header("location:agenda.php");
	
?>