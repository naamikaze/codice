<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("librerias.html");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                <img src="./assets/img/logo.png" width="60px">códice <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
                
            </div>
            <!-- SideBar User info -->
            
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <li>
                    <a href="home.php">
                        <i class="zmdi zmdi-balance zmdi-hc-fw"></i> INICIO
                    </a>
                </li>
                <li>
                    <a href="archivos_mostrar.php" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> ARCHIVOS 
                    </a>

                </li>
                <li>
                    <a href="login_profesores.php" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-account zmdi-hc-fw"></i> INICIAR SESION
                    </a>
                    
                </li>
                
                
            </ul>
        </div>
    </section>

    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">

            <ul class="full-box list-unstyled text-right">

                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
            
                
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
            
            </ul>
        </nav>
        <!-- Content page -->
	
	    <?php 
	
	    include('conexion.php');
	    $idd = $_REQUEST['id'];
	    $query = "SELECT * FROM archivos WHERE id = '$idd'"; 
	    $resultado = $conexion->query($query);
	    $row = $resultado -> fetch_assoc();

	    ?>
	
	<form action="guardar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
<div class="container">
	    <h3>Modificacion de archivo</h3>

    <input id="archivo" REQUIRED type="file" name="archivo" >

<br><br><br>

        <h4>Ingrese el título del archivo</h4><br>
        <input type="text"  REQUIRED id="titulo" name="titulo" placeholder="Ingresar título"><br><br><br>


        <h4>Descripción del archivo</h4><br>
        <textarea rows="5"  REQUIRED cols="100" name="desc" placeholder="Redacte una descripción sobre el archivo" id="descripcion"></textarea><br><br><br>

        <h4>Seleccione la materia</h4><br>
        <select class="form-control" id="materia" name="materia">
            <option value="no" disabled="disabled" selected="true">Materias</option>
            <option value="1">bombace</option>
            <option value="2">pancracio</option>

        </select><br><br><br>

        <h4>Seleccione alguno de los cursos</h4><br>
        <select class="form-control" id="curso" name="curso">
            <option value="no" disabled="disabled" selected="true">Seleccione un curso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>

	<br>
	
	<button id="cargar" class="btn btn-info btn-raised btn-lg"><i class="zmdi zmdi-floppy"></i> Guardar</button>
  



	</form>
    </head>
</div>
<!--====== Scripts -->
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/material.min.js"></script>
    <script src="./js/ripples.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        $.material.init();
    </script>
</body>
</html>
   <script>
       document.getElementById('cargar').onclick = function(){
       
       var nombre = document.getElementById('nombre').value;
       var desc = document.getElementById('desc').value;
       var materia = document.getElementById('materia').value;
       var curso = document.getElementById('curso').value;

       }
   </script>