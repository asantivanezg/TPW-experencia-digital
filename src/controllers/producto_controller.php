<?php
require_once("../models/producto.php");
$productos = new Producto();
$datos = $productos -> listar();
require_once("");
?>