<?php
include 'conexion.php';
$id=$_REQUEST['id'];
$name=$_REQUEST['nombre'];
$ape=$_REQUEST['ape'];
$dir=$_REQUEST['dir'];
$telf=$_REQUEST['telf'];
$mail=$_REQUEST['mail'];

$qry="UPDATE agenda SET nombre = '$name', apellidos = '$ape', mail='$mail', direccion='$dir', telefono='$telf' WHERE id_agenda = $id";
$result=mysqli_query($conn,$qry);
header("Location: agenda.php")
?>