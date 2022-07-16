<?php 

include('../../views/intranet/login/db.php');

if (isset($_POST['guardar_producto'])) {

  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $stock = $_POST['stock'];
  $precio = $_POST['precio'];

  $query = "INSERT INTO tb_producto (nombre,descripcion,precio,stock,idCategoria,activo) VALUES ('$nombre', '$descripcion', '$precio', '$stock',1, 1)";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto guardado satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: /src/controllers/producto_controller.php');

}
?>
