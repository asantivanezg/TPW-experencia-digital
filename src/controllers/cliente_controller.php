<?php
require_once '../models/cliente.php';
class ClienteController {

    private $model; 

    public function __construct() {
        $this -> model = new Cliente();
    }

    public function index() {
        require_once("../models/cliente.php");
        $cli = new Cliente();
        $datos = $cli -> listar();
        require_once '../views/intranet/cliente_view.php';
    }

    public function guardar() {
        $cli = new Cliente();

        $cli -> nombre = $_REQUEST['nombre'];
        $cli -> descripcion = $_REQUEST['apellido'];
        $cli -> direccion = $_REQUEST['direccion'];
        $cli -> telefono = $_REQUEST['telefono'];
        $cli -> dni = $_REQUEST['dni'];

        $this -> model -> registrar($cli);
    }
}

require_once("../models/cliente.php");
$clientes = new Cliente();
$datos = $clientes -> listar();
require_once("../views/intranet/cliente_view.php");
?>