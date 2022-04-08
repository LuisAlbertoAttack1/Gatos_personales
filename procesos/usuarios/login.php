<?php
    session_start();
    include "../../clases/Conexion.php";
    include "../../clases/Usuario.php";
    $Usuarios=new Username();
    $username= $_POST['username'];
    $password= sha1($_POST['password']);
    //Se Encarga De Incriptar Un Password
    $answer = $Usuarios->login($username, $password);
    if ($answer) {
        //Redicionar Al Inicio
        header("location:../../vistas-panel/inicio.php");
    } else {
        echo "No Puedes Entrar".$answer;
    }
    
?>