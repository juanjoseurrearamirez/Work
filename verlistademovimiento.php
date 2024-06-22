<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bp-local/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Listar Usuarios</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: -webkit-linear-gradient(90deg, #050505,#363636,#808080,#c7c7c7);background: linear-gradient(90deg, #050505,#363696,#808080,#c7c7c7);">
     <img src="bp-local/img/super.png" style="width: 10%; border-radius: 50%;">
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
            <li><a class="dropdown-item" href="listar.php"><strong>Listado de Productos</strong></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: white;">
            <strong>Datos Movimientos</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="movimientos.php" ><strong>Registro de Movimiento</strong></a></li>
            <li><a class="dropdown-item" href="verlistademovimiento.php"><strong>Historial de Movimiento</strong></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

    <h1 class="text-center">Listado de Movimientos</h1>
    <div class="container d-flex justify-content-between">
    
    <h3>Movimientos</h3>
    <a href="inicio.php" class="btn btn-dark align-content-end">Pagina Inicio</a>
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
 </table>
    </div>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>