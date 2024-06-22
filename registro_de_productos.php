<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="bp-local/css/bootstrap.min.css">
</head>
<body style="background-image: url(bp-local/img/8.jpg); background-repeat: no-repeat; background-size: cover;">
   <nav class="navbar navbar-expand-lg bg-success">
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
<br><br><br>
<center><h1>Registro de Productos</h1></center>
<br>
  <div class="conatiner">
    <footer id="contacto" class="text-white py-4">
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    <br>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="descripcion" placeholder="Descripcion"></textarea>
                    <br>
                </div>
                <div class="form-group">
                    <input type = "text" class="form-control" name="precio_costo" placeholder="Precio_costo"></input>
                    <br>
                </div>
                <div class="form-group">
                    <input type = "text" class="form-control" name="precio_venta" placeholder="Precio_venta"></input>
                    <br>
                </div>
                <div class="form-group">
                    <input type = "text" class="form-control" name="stock" placeholder="Stock"></input>
                    <br>
                </div>
                <center><button type="submit" class="btn btn-outline-dark" name="submit"><a href="login.php"></a>Registrar</button></center>
            </form>
        </div>
    </footer>
</div>
  <div class="container text-danger text-center"></div>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
      if(empty($_POST['nombre']) && strlen($_POST['nombre']) < 5){
        echo "<p>El Nombre del producto es requerido</p>";
      }

      if(empty($_POST['precio_costo']) && strlen($_POST['precio_costo']) < 5){
        echo "<p>El Precio de costo es requerido</p>";
      }

      if(empty($_POST['precio_venta']) && strlen($_POST['precio_venta']) < 5){
        echo "<p>El precio de venta es requerido</p>";
      }

      if(empty($_POST['stock']) && strlen($_POST['stock']) < 5){
        echo "<p>Stock es requerido</p>";
      }

      if(empty($_POST['descripcion'])){
        echo "<p>Descripcion no debe estar vacio</p>";
      }
    }
    include ("conexion.php");
    include ("registrar.php");
     ?>
  </div>
  <br><br>
  <div class="container">
  <h1 class="text-center">Listado de productos</h1>
  <div class="container d-flex justify-content-between">
  
  <h3>Productos</h3>
  </div>

  <div class="container">
    <div class="container my-2 bg-light text-center">
      <?php
      include "conexion.php";
        ?>
    </div>
  </div>
  <table class="table">
      
    <tr>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio_costo</th>
      <th>Precio_venta</th>
      <th>Stock</th>
    </tr>
    <tr>
      
    </tr>
  <?php
  include("conexion.php");
  $sql = $conexion->query("select * from tbl_productos");
  
  while ($productos = $sql->fetch_object()){
    
    echo "<tr><td> $productos->Nombre </td><td> $productos->Descripción </td><td> $productos->Precio_costo </td><td> $productos->Precio_venta </td><td>$productos->Stock</td><td> 

    <a href='Editar.php?id=$productos->Id_producto' data-toggle='modal' data-target='#exampleModal'></i> </a>
    <a href='listarventas.php?id=$productos->Id_producto'</a></td></tr>";


    }
  ?>
 </table>
  </div>

  <div class="container bg-body-tertiary">
  <div class="text-center" >
    <a href=""><i class="bi bi-instagram p-2 mx-3 p-2 mx-3"></i></a>
    <a href=""><i class="bi bi-google p-2 mx-3"></i></a>
    <a href=""><i class="bi bi-youtube p-2 mx-3"></i></a>
    <a href=""><i class="bi bi-android2 p-2 mx-3"></i></a>
  </div>
  <p class="text-center">&copy Derechos Reservados</p>

</div>


<script src="/bp-local/js/bootstrap.bundle.min.js"></script>

  <script src="bp-local/js/bootstrap.bundle.min.js"></script>
</body>
</html>