<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bp-local/css/bootstrap.min.css">
    <title>....</title>
</head>
<body>
    <a href="movimientos.php" class="btn btn-dark align-content-end">Regresar</a>
</body>
</html>
<center>
    <?php


$nombrehost = "localhost"; 
    $nombreuser = "root";
    $contraseña = "";
    $nombredb = "bd_usuario";


$conexion = new mysqli($nombrehost, $nombreuser, $contraseña, $nombredb);


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$id_producto = filter_input(INPUT_POST, 'id_producto', FILTER_VALIDATE_INT);
$tipo_movimiento = filter_input(INPUT_POST, 'tipo_movimiento', FILTER_SANITIZE_STRING);
$cantidad = filter_input(INPUT_POST, 'cantidad', FILTER_VALIDATE_INT);
$fecha_movimiento = filter_input(INPUT_POST, 'fecha_movimiento', FILTER_SANITIZE_STRING);

if ( $id_producto === false || $cantidad === false || !$tipo_movimiento || !$fecha_movimiento) {
    die("Datos inválidos");
}

$sql = "INSERT INTO tbl_movimientos ( Id_producto, Tipo_movimiento, Cantidad, Fecha_movimiento) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("isis", $id_producto, $tipo_movimiento, $cantidad, $fecha_movimiento);

if ($stmt->execute() === TRUE) {

    if ($tipo_movimiento == 'entrada') {
        $sql_update = "UPDATE tbl_productos SET Stock = Stock + ? WHERE Id_producto = ?";
    } elseif ($tipo_movimiento == 'salida') {
        $sql_update = "UPDATE tbl_productos SET Stock = Stock - ? WHERE Id_producto = ?";
    } else {
        die("Tipo de movimiento inválido");
    }

    $stmt_update = $conexion->prepare($sql_update);
    $stmt_update->bind_param("ii", $cantidad, $id_producto);

    if ($stmt_update->execute() === TRUE) {
        echo "Movimiento registrado y actualizado";
    } else {
        echo "Error al actualizar el stock: " . $conexion->error;
    }

    $stmt_update->close();
} else {
    echo "Error al registrar el movimiento: " . $conexion->error;
}

$stmt->close();
$conexion->close();

?>
  <script src="bp-local/js/bootstrap.bundle.min.js"></script>
</center>