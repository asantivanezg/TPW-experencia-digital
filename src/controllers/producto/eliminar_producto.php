<?php

include('../../views/intranet/login/db.php');

if(isset($_GET['id'])) {

  $id = $_GET['id'];

  $query = "UPDATE tb_producto SET activo = 0 WHERE id = $id";

  $result = mysqli_query($conexion, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: /src/controllers/producto_controller.php');
}

?>
