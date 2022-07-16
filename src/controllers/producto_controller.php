<?php
require_once '../models/producto.php';
class ProductoController {

    private $model; 

    public function __construct() {
        $this -> model = new Producto();
    }

    public function index() {
        require_once("../models/producto.php");
        $productos = new Producto();
        $datos = $productos -> listar();
        require_once '../views/intranet/producto_view.php';
    }

    public function guardar() {
        $prod = new Producto();

        $prod -> nombre = $_REQUEST['nombre'];
        $prod -> descripcion = $_REQUEST['descripcion'];
        $prod -> stock = $_REQUEST['stock'];
        $prod -> precio = $_REQUEST['precio'];

        $this -> model -> registrar($prod);
    }
}
require_once("../models/producto.php");
$productos = new Producto();
$datos = $productos -> listar();
require_once("../views/intranet/producto_view.php");
?>