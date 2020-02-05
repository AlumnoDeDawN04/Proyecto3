<?php
include 'conexion.php';
session_start();
//aqui definimos la sesion de cada usuario y muestra SUS contactos
$id_user=$_SESSION['id'];
  if(isset($_REQUEST['q'])){
    $sql=mysqli_query($conn,"SELECT * FROM agenda WHERE agendado='".$id_user."' AND nombre LIKE '%".$_REQUEST['q']."%'");
  }else{
    $sql=mysqli_query($conn,"SELECT * FROM agenda");
  }

  $contactos=array();
  while($row = mysqli_fetch_assoc($sql)){
    $contactos[]=$row;
  }
  print json_encode($contactos);
?>