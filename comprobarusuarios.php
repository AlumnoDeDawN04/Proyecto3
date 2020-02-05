<?php
//Esto evitara que entremos como hackers
include "conexion.php";
if (!$_POST["user"] && !$_POST["pwd"]) {
	header("location:index.php");
}else{
	$name=$_POST["user"];
	$pwd=$_POST["pwd"];
	$encript=md5($pwd);
	$consulta="select * from usuario where pwd='$encript' and nombre='$name'";
	$consulta=mysqli_query($conn,$consulta);
	if(mysqli_num_rows($consulta) && !empty($consulta)){
		echo "El usuario es correcto";
		$row=mysqli_fetch_array($consulta);
		session_start();
		$_SESSION['id']=$row[0];
		$_SESSION['nombre']=$name;
		header("location:agenda.php");
	}else{
		header("location:index.php?error='error'");
	}
}