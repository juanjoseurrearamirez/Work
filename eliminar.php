<?php
	if (!empty($_GET['Id'])) {
		$id=$_GET['Id'];
		include("conexion.php");
		$sql=$conexion->query("DELETE FROM tbl_productos WHERE Id_producto=$id");
		if ($sql==1) {
			echo("<p class='alert alert-success'>Usuario Eliminado Exitosamente</p>");
		}
		else{
			echo("<p class='alert alert-danger'>Error el Eliminar Usuario</p>");
		}
	}
  ?>