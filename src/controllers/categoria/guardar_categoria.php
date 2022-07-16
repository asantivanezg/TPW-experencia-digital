<?php 

include('../../views/intranet/login/db.php');

if (isset($_POST['guardar_categoria'])) {

  $descripcion = $_POST['descripcion'];

  $query = "INSERT INTO tb_categoria (descripcion, estado) VALUES ('$descripcion', 1)";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Categoria guardado satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: /src/controllers/categoria_controller.php');

}
?>
