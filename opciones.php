<?php
include "conexion.php";
echo $_REQUEST['option'];
echo $_REQUEST['id'];
$id=$_REQUEST['id'];
switch ($_REQUEST['option']) {
	case '1':
		
		break;
	
	case '2':
	    $query="UPDATE tbl_usuarios SET estado='0' WHERE id=$id";
	    //header("Location: adminUser.php");
	    $result=mysqli_query($conn,$query);
	    include "adminUser.table.php";
	    break;
	case '3':
	    $query="UPDATE tbl_usuarios SET estado='1' WHERE id=$id";
	    //header("Location: adminUser.php");
	    $result=mysqli_query($conn,$query);
	    include "adminUser.table.php";
	    break;
	case '4':
	    $query="UPDATE tbl_usuarios SET estado='2' WHERE id=$id";
	    //header("Location: adminUser.php");
	    $result=mysqli_query($conn,$query);
	    include "adminUser.table.php";
	    break;
	case '5':
	    $query="UPDATE tbl_usuarios SET estado='0' WHERE id=$id";
		//header("Location: eliminados.php");
		$result=mysqli_query($conn,$query);
		include 'eliminados.table.php';
	    break;

}

?>