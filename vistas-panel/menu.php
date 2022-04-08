<?php 
   session_start();
   if(isset($_SESSION['username'])){
?>
   <div class="d-flex">
       <div id="sidebar-container" class="nav-color">
           <div class="logo">
               <div class="card border-0 rounded-circle ms-4 mt-4 mb-4" style="width: 10rem;">
                   <img src="../img/Logo.jpg" class="card-img-top rounded-circle" alt="Tu Imagen No Se Encuentra">
               </div>
           </div>
           <div class="menu">
               <div  class="d-grid gap-2 col-6 mx-auto mt-3 mb-3 border-0 text-center">
                   <h5><?php echo $_SESSION['username'];?></h5>
               </div>
           <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3 border-0">
                   <a href="inicio.php" class="btn"><span id="colorletra"><i class="fa-solid fa-earth-americas"></i> Inicio</span></a>
               </div>

               <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3 border-0">
                   <a href="ganancias.php" class="btn"><span id="colorletra"><i class="fa-solid fa-signal"></i> Ganancias</span></a>
               </div>
               <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3 border-0">
               <a href="gastos.php" class="btn"><span id="colorletra"><i class="fa-solid fa-money-bill-1"></i> Gastos</span></a>
               </div>
               <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3 border-0">
               <a href="reportes.php" class="btn"><span id="colorletra"><i class="fa-solid fa-book-open-reader"></i> Reportes</span></a>
               </div>
               <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3 border-0">
               <a href="salir.php" class="btn"><span id="colorletra"><i class="fa-solid fa-circle-xmark"></i> Salir</span></a>
               </div>

               <div class="text-center mt-4">
               <i class="fa-brands fa-facebook fa-2x ms-2"></i>
               <i class="fa-brands fa-whatsapp-square fa-2x ms-2"></i>
               <i class="fa-brands fa-instagram-square fa-2x ms-2"></i>
               </div>
           </div>
       </div>
       <?php
  }else {
      header("location:../index.php");
  }
?>