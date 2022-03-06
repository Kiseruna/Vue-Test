<?php
class Conexion{
    public static function Connect(){
        define('servidor', 'localhost');
        define('usuario', 'root');
        define('nombre_bd', 'ceipa');
        define('password', '');
        $config = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $conectar = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $config);
            return $conectar;
        }catch (Exception $error){
            die("El error de Conexión es: ". $error->getMessage());
        }
    }
}
?>
