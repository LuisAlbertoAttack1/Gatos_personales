<?php

class Connection{
        private $server="localhost";
        private $username="root";
        private $password="";
        //NOMBRE DE LA BASE DE DATOS QUE SE VA A CREAR
        private $db="usuarioBaseDDatos";
    public function connect(){
        try{
        $connection= mysqli_connect(
                
            $this->server,
            $this->username,
            $this->password,
            $this->db

        );
    return $connection;
        }catch(\Throwable $th){
            return $th->getMessage();
        }

    }
}

?>