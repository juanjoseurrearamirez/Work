<?php
	
	$nombrehost = "localhost"; 
	$nombreuser = "root";
	$contraseña = "";
	$nombredb = "bd_usuario";

	$conexion = mysqli_connect($nombrehost, $nombreuser, $contraseña, $nombredb);

	if (!$conexion) {
		echo "Fallo la Conexion";
	}

 ?>