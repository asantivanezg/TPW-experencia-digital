<?php
require_once("../models/categoria.php");
$productos = new Categoria();
$datos = $productos -> listar();
require_once("");
?>