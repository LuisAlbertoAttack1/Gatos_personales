<?php 
require_once "header.php"; 
require_once "./menu.php";

?>



<div div data-aos="slide-down" data-aos-duration="4000" class="container" id="fondoganancias">
    <div class="row">
        <div class="col">
            <div class="card mt-4 border-0">
                <div class="card-body">
                    <div class="text-center">
                        <img src="../img/ganancias1.gif" id="imagenganancias" alt="">
                    </div>
                    <form action="" method="post">
                        <h2 class="text-center mt-4 mb-4" id="tipoLetra">GANANCIAS DE LA EMPRESA</h2>
                        <h4 class="mt-2 mb-2" id="tipoLetra">Monto</h4>
                        <input type="text" name="monto" class="form-control mt-2 mb-2" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <h4 class="mt-2 mb2" id="tipoLetra">Categoria De Compra</h4>
                        <input type="text" name="categoria" class="form-control mt-2 mb-2" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <h4 class="mt-4 mb-4 text-center" name="fechadecompro">Fecha Automatica</h4>
                        <!--Nota saber si se tiene que colocar un input o solamente mostrar la fecha-->
                        <div class="row">
                            <div class="col">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="d-grid  mx-auto">
                                            <a href="./reportes.php" class="btn btn-primary" id="tipoLetra">Ingresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-grid  mx-auto">
                                    <a href="./inicio.php" class="btn btn-danger" id="tipoLetra">Inicio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="../index.php" class="btn btn-warning" id="tipoLetra">Salir</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>

<?php require_once "footer.php"?>