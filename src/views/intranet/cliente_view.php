<?php include('includes/header.php'); ?>

<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location: /src/views/intranet/login/intranet-login.php");
}

$nombre=$_SESSION['nombre'];
//limitar la visualización de páginas
// $tipo_usuario=$_SESSION['tipo_usuario'];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/index.php">Experiencia Digital Intranet</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link" href="/src/controllers/producto_controller.php">Producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/src/controllers/categoria_controller.php">Categoría</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/src/views/intranet/login/cerrar.php">Cerrar sesión</a>
      </li>
    </ul>
  </div>
</nav>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!-- MESSAGES -->

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action="/src/controllers/cliente/guardar_cliente.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre cliente" autofocus>
                    </div>
                    <div class="form-group">
                        <input name="apellido" rows="2" class="form-control" placeholder="apellido">
                    </div>
                    <div class="form-group">
                        <input name="dni" rows="2" class="form-control" placeholder="dni">
                    </div>
                    <div class="form-group">
                        <input name="telefono" rows="2" class="form-control" placeholder="telefono">
                    </div>
                    <div class="form-group">
                        <input name="direccion" rows="2" class="form-control" placeholder="direccion">
                    </div>
                    <input type="submit" name="guardar_cliente" class="btn btn-success btn-block" value="Guardar Cliente">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  for($i=0;  $i<count($datos); $i++){                  
                  ?>
                    <tr>
                        <td> <?php  echo $datos[$i]["id"]; ?> </td>
                        <td> <?php  echo $datos[$i]["nombre"]; ?> </td>
                        <td> <?php  echo $datos[$i]["apellido"]; ?> </td>
                        <td> <?php  echo $datos[$i]["direccion"]; ?> </td>
                        <td> <?php  echo $datos[$i]["dni"]; ?> </td>
                        <td> <?php  echo $datos[$i]["telefono"]; ?> </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>