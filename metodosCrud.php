<?php

    class metodos{

        public function mostrarDatos($sql){

            $con = new  Connection();

            $conexion =$con->connect();



            $result = mysqli_query($conexion,$sql);



            return mysqli_fetch_all($result,MYSQLI_ASSOC);

        }



        public function insertarDatosNombre($datos){

            $con = new Connection();

            $conexion =$con->connect();



            $sql = "INSERT into t_usuario(usuario,password,nombre,apellido_paterno,apellido_materno)values

            ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]' )";

            return $result = mysqli_query($conexion,$sql);



        }

    }

?>