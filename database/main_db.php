<?php
class Database
{
    public static function Conectar()
    {
        $usuario = "root";
        $password = "admin";
        //$database = "bd_experiencia_digital";

        $pdo = new PDO("mysql:host=localhost; dbname=bd_experiencia_digital" , $usuario, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

}