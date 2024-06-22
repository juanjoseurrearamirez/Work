<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bp-local/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Registro de Movimiento</title>
</head>
<body style="background-image: url(bp-local/img/8.jpg); background-repeat: no-repeat; background-size: cover;">
        <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php" style="color: white;"><strong>Inicio</strong></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: white;">
            <strong>Datos Productos</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registro_de_productos.php"><strong>Registro de Productos</strong></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: white;">
            <strong>Datos Movimientos</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="movimientos.php" ><strong>Registro de Movimiento</strong></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <center>
      <br><br><br>
      <br><br><br>
        <div class="container">
            <h2>Registro de movimientos</h2>
        <form action="procesar_movimiento.php" method="post">
        <br><br>
        <label for="id_producto"><center><strong>ID Producto:</strong></center></label>
        <br>
        <input type="number" id="id_producto" name="id_producto" required style="width: 500px; height: 30px; border-radius: 5px;">
        <br><br>

        <label for="tipo_movimiento"><strong>Tipo Movimiento:</strong></label>
        <br>
        <select type="text" id="tipo_movimiento" name="tipo_movimiento" required style="width: 500px; height: 30px; border-radius: 5px;">
            <option>entrada</option>
            <option>salida</option>
        </select>
        <br><br>
        <label for="cantidad"><strong>Cantidad:</strong></label>
        <br>
        <input type="number" id="cantidad" name="cantidad" required style="width: 500px; height: 30px; border-radius: 5px;"><br><br>

        <label for="fecha_movimiento"><strong>Fecha Movimiento:</strong></label>
        <br>
        <input type="date" id="fecha_movimiento" name="fecha_movimiento" required style="width: 500px; height: 30px; border-radius: 5px;"><br><br>

        <input type="submit" value="Registrar Movimiento" style="background:cornflowerblue; color: white; border-radius: 50px;">
    </form>

    </div>
    
    </center>
    <br><br><br>
    <br><br><br>
    <div class="container">
    <h1 class="text-center">Listado de Movimientos</h1>
    <div class="container d-flex justify-content-between">
    
    <h3>Movimientos</h3>
    <a href="registro_de_productos.php" class="btn btn-dark align-content-end">Estock actualizado</a>
    </div>
    <table class="table">
            
        <tr>
            <th>Id movimiento</th>
            <th>Id Producto</th>
            <th>Fecha Movimiento</th>
            <th>Tipo Movimiento</th>
            <th>Cantidad</th>
            
            <th></th>
        </tr>
        <tr>
            
        </tr>
    <?php

    include("conexion.php");
    $sql = $conexion->query("SELECT * FROM tbl_movimientos");
    
    while ($usuarios = $sql->fetch_object()){
        
        echo "<tr>
        <td> $usuarios->Id_movimiento </td>
        <td> $usuarios->Id_producto </td>
        <td> $usuarios->Fecha_movimiento </td>
        <td> $usuarios->Tipo_movimiento </td>
        <td> $usuarios->Cantidad </td>
        <td> 
        
        </td>
    </tr>";


        }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  <script src="bp-local/js/bootstrap.bundle.min.js"></script>
 </table>
    </div>
</body>
</html>