<?php
include ("verificar_inicio.php");
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM registro_ventas"); 
$resultado1 = $conexion->query("SELECT MAX(precio) AS PrecioMaximo FROM registro_ventas");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<header>
    <br>
    <nav class="navbar navbar-expand-sm  navbar-dark nav">

    <!-- LOGO -->
    <a class="navbar-brand">
      <img src="imgs/logo.jpeg" alt="logo" style="width:90px;">
    </a>
    
    <!-- NAVS -->
    <ul class="navbar-nav">

      <li class="nav-item ">
        <a class="nav-link " href="mod_inventario.php">Inventario </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="reg_venta.php">Registrar Venta </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php">Usuarios </a>
      </li>
    </ul>

    <!-- Cerrar Sesión & Ayuda -->
    <div class="card-body d-flex justify-content-between align-items-center">
     <div>
        <ul class="nav nav-pills " style="text-align: right;">
            <li class="nav-item">
                <a class="nav-link ayuda text-dark" href="ayuda.php" >Ayuda</a>
            </li>
        </ul>
    </div>
						<a href="cerrar_sesion.php" class="Cerrar_sesion btn nav-link active border ">Cerrar Sesión</a>
					</div>
  </nav>
</header>

<body>
  <div class="container">
  <form action="conexion_venta.php" method="post" class="needs-validation mt-5 " novalidate>
    <div class="form-group">
      <label for="uname">ID_Vendedor</label>
      <input type="number" class="form-control venta" id="uname" placeholder="ID_VENDEDOR..." name="vendedor" required>
    </div>
    <div class="form-group">
      <label for="uname">Producto:</label>
      <input type="text" class="form-control venta" id="uname" placeholder="Nombre del producto..." name="producto" required>
    </div>
    <div class="form-group">
      <label for="uname">Cantidad</label>
      <input type="number" class="form-control venta" id="uname" placeholder="Cantidad de productos..." name="vendedor" required>
    </div>
    <div class="form-group">
      <label for="pwd">Precio:</label>
      <input type="number" class="form-control venta" id="pwd" placeholder="Precio..." name="precio" required>
    </div>
    <input type="submit" class="btn btn-primary enviar_venta" value="Enviar" id="boton_venta" onclick="return confirm('¿Estás seguro de que desea registrar la venta?');"></input>
  </form>
</div>

</body>

<footer class="footer">
  <?php echo "Ventas realizadas: ".$resultado->num_rows;?> <br>
  <p>La venta mayor es: <?php if (mysqli_num_rows($resultado1) > 0) {
	while($rowData = mysqli_fetch_array($resultado1)){

    if($rowData["PrecioMaximo"] != 0){
      echo $rowData["PrecioMaximo"];
    }else{
      echo "0";
    }
  	
	}
}?></p>

<script src="js/sumarventa.js"></script>
</footer>
</html>