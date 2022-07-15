<?php
session_start();
session_destroy();
//redireccionar
header("Location: /index.php");
?>