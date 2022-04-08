<?php 
class Username{
    public function login($username, $password) {

        try {
                $con = new Connection();
                $conexion = $con->connect();
                $sql = "SELECT * FROM t_usuario 
                        WHERE usuario='$username'
                        AND password='$password'";
                $answer = mysqli_query($conexion, $sql);
                //DEBEMOS PREGUNTAR CUANTOS REGISTROS EXISTEN
                $existe = mysqli_num_rows($answer);
                if ($existe > 0) {
                    $_SESSION['username']=$username;
                    return true;
                } else {
                    return false;
                }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function ingresar($monto, $categoria, $fechadecompro){
$monto = $_POST['monto'];
$categoria = $_POST['categoria'];
$fechadecompro = $_POST['fechadecompro'];

$sql ="SELECT INTO t_contenido (monto, categoria, fechadecompro) VALUES ('$monto', '$categoria', '$fechadecompro')";


$ejecutable = mysqli_query($conexion,$sql);

    }
}
?>
