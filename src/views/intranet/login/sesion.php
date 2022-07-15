<?php
include('db.php');
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$consulta = "SELECT * FROM tb_usuario where usuario ='$usuario' and contrasenia='$password'";
$resultado = mysqli_query($conexion, $consulta);

$num = $resultado->num_rows;

if ($num > 0) {

  $row = $resultado->fetch_assoc();
  $password_bd = $row['contrasenia'];
  $password_c = $password;

  if ($password_bd == $password_c) {

    $_SESSION['id'] = $row['id'];
    $_SESSION['nombre'] = $row['nombre'];
    //$_SESSION['tipo_usuario'] = $row['tipo_usuario'];

    header("location: ../../../controllers/producto_controller.php");
  } else {
    echo '<script>alert("La contraseña es inválida");</script>';
    //header("location: /src/views/intranet/login/intranet-login.php");
  }
} else {
  echo '<script>alert("No existe el usuario");</script>';
  //header("location: /src/views/intranet/login/intranet-login.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>