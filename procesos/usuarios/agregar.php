<?php

session_start();
include "../../clases/Conexion.php";
require_once "../../metodosCrud.php";
require_once "../../clases/Usuario.php";
$Usuarios=new Username();
// $username= $_POST['username'];
// $password= sha1($_POST['password']);
///////////////////////////////////////////
$usuario= $_POST['usuario'];
$contraseña= sha1($_POST['contraseña']);
$nombre= $_POST['nombre'];
$apellido_paterno= $_POST['apellido_paterno'];
$apellido_materno= $_POST['apellido_materno'];
//////////////////////////////////////////
//Se Encarga De Incriptar Un Password
$answer = $Usuarios->login($username, $password);
if ($answer) {
    //Redicionar Al Inicio
    header("location:../../vistas-panel/inicio.php");
} else {
    echo "No Puedes Entrar".$answer;
}


$datos = array($usuario,$contraseña,$nombre,$apellido_paterno,$apellido_materno);

$obj = new metodos();

if ($obj->insertarDatosNombre($datos)==1) {
    header("location:../../index.php");
}else {
    echo "tienes un error al agregar";
}

?>

