<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (!empty($_POST['nombre']) && (!empty($_POST['descripcion'])) && (!empty($_POST['precio_costo'])) && (!empty($_POST['precio_venta'])) && (!empty($_POST['stock']))) {


		$NOMBRE = $_POST['nombre'];
		$DESCRIPCION = $_POST['descripcion'];
		$PRECIO_COSTO = $_POST['precio_costo'];
		$PRECIO_VENTA = $_POST['precio_venta'];
		$STOCK = $_POST['stock'];


		$sql = $conexion->query("INSERT INTO tbl_productos(Id_producto, Nombre, Descripción, Precio_costo, Precio_Venta, Stock) VALUES ('','$NOMBRE','$DESCRIPCION','$PRECIO_COSTO','$PRECIO_VENTA','$STOCK')");

		if ($sql==1) {
			echo "<p class ='text-bg-success text-center'> Datos Guardados exitosamente</p>";
		}

		else{
			echo "<p class ='text-bg-danger text-center'>Usuario no Registrado</p>";
		}

			
		}
		
	}

 ?>