<?php 

include('../../views/intranet/login/db.php');

if (isset($_POST['guardar_cliente'])) {

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];

  $query = "INSERT INTO tb_cliente (nombre,apellido,dni,telefono,direccion,estado) VALUES ( '$nombre', '$apellido', '$dni', '$telefono', '$direccion' ,  1)";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cliente guardado satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: /src/controllers/cliente_controller.php');

}
?>
