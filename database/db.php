<?php
class Database
{
    public static function Conectar()
    {
        $usuario = "root";
        $password = "admin";
        $database = "bd_experiencia_Digital";

        $pdo = new PDO("mysql:host=localhost; dbname=".$database, $usuario, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
?>