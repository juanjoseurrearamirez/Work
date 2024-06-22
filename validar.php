<?php 
	if(empty($_POST['ingresar'])){
		if(empty($_POST['email']) && empty($_POST['clave'])){
			echo "<p Class='text-bg-danger text-center'>Todos los campos son obligatorios</p>";
		}else{
			$correo=$_POST['email'];
			$password= $_POST['clave'];

			$sql = $conexion->query("SELECT * FROM `bdusario` WHERE Correo='$correo' AND Contraseña='$password'");
			if($sql->fetch_object()){
				header("Location:home.php");
			}else{
				echo "<p Class='text-bg-danger text-center'>Accesso Denegado!!!!</p>";
			}
		}
	}
 ?>