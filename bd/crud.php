<?php
include_once 'connect.php';
$objeto = new Conexion();
$conexion = $objeto->Connect();

date_default_timezone_set('America/Bogota');

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$tipoId = (isset($_POST['tipoId'])) ? $_POST['tipoId'] : '';
$numeroId = (isset($_POST['numeroId'])) ? $_POST['numeroId'] : '';
$fechaNac = (isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : '';

//Formato en primera letra capital a cada palabra
$nombre = ucwords(strtolower($nombre));
//Formato de la fecha

switch($opcion){
    case 1:
        $consulta = "SELECT id, n_comp, tipo_id, n_id, f_nac FROM datos_personales";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        $consulta = "UPDATE datos_personales SET n_comp='$nombre', tipo_id='$tipoId', n_id='$numeroId', f_nac='$fechaNac' WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;
