<?php
include "conexion.php";
	session_start();
	$id=$_SESSION['id'];
	$nombre=$_REQUEST['user'];
	$apellidos=$_REQUEST['ape'];
	$mail=$_REQUEST['mail'];
	$dir=$_REQUEST['dir'];
	$tel=$_REQUEST['tel'];
	$consulta="insert into agenda (agendado,nombre,apellidos,mail,direccion,telefono) values ('".$id."','".$nombre."','".$apellidos."','".$mail."','".$dir."','".$tel."')";
	$query=mysqli_query($conn,$consulta);
	header("location:index.php");
?>