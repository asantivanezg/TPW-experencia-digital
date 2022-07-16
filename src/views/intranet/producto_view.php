<?php include('includes/header.php'); ?>

<?php 
//require_once("/database/main_db.php");

session_start();
if(!isset($_SESSION['id'])){
    header("Location: /index.php");
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/src/controllers/categoria_controller.php">Categoría</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/src/controllers/cliente_controller.php">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/cerrar.php">Cerrar sesión</a>
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
            <?php session_unset(); } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action="/src/controllers/producto/guardar_producto.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre producto" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                        <input type="text" name="stock" class="form-control" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <input type="text" name="precio" class="form-control" placeholder="Stock">
                    </div>
                    <input type="submit" name="guardar_producto" class="btn btn-success btn-block" value="Guardar Producto">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoria</th>
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
                        <td> <?php  echo $datos[$i]["descripcion"]; ?> </td>
                        <td> <?php  echo "S/. ".number_format($datos[$i]["precio"],2,'.',','); ?> </td>
                        <td> <?php  echo $datos[$i]["stock"]; ?> </td>
                        <td> <?php  echo $datos[$i]["categoria"]; ?> </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="/src/controllers/producto/eliminar_producto.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
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