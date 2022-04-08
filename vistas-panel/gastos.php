<?php 
    include "header.php";
    include "menu.php";
?>

<div div data-aos="slide-left" data-aos-duration="4000" class="container mt-4 mb-4">
    <div class="row">
        <div class="col">
<div class="text-center">
<img src="../img/gastos2.gif" id="tamañogastos" alt="">
</div>
            <h2 class="text-center mt-2 mb-2" id="tipoLetra">GASTOS DE LA EMPRESA</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mt-2 mb-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title" id="tipoLetra">Monto</h5>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mt-2 mb-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title" id="tipoLetra">Categoria De Gasto (Que Compraste)</h5>
                            <!--Input desplegable-->
                            <select class="form-select" aria-label="Default select example">
                                <option selected id="tipoLetra">Compra De Actividades</option>
                                <option value="1" id="tipoLetra">Zapatos</option>
                                <option value="2" id="tipoLetra">Tenis</option>
                                <option value="3" id="tipoLetra">Ropa</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda Fila -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mt-2 mb-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title" id="tipoLetra">Fecha Inicio </h5>
                            <!--Va por base de datos que la tenemos que mostrar-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mt-2 mb-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title" id="tipoLetra">Fecha Fin</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tercera Fila -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0 mt-2 mb-2">
                        <div class="card-body">
                            <h5 class="card-title" id="tipoLetra">Tipo De Informacion </h5>
                            <!--Va por base de datos que la tenemos que mostrar-->
                            <select class="form-select" aria-label="Default select example">
                                <option selected id="tipoLetra">Tipo De Informacion</option>
                                <option value="1" id="tipoLetra">Gastos</option>
                                <option value="2" id="tipoLetra">Ganancias</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="card mt-2 mb-2 border-0">
                        <div class="card-body">
                        <div class="col">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="d-grid  mx-auto">
                                        <a href="../vistas-panel/reportes.php" class="btn btn-primary" id="tipoLetra">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</div>
<?php 
    include "footer.php";

?>