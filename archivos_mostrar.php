<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
					<a href="home.html">
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

	
	    
		<a href="subida_archivo.php"><button class='btn btn-success btn-raised btn-lg'>Subir Nuevo</button></a>
	    	<table border="1"> 
		    <div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center ">
			<thead>
			<tr>
<<<<<<< HEAD
			   <!-- <th class="text-center">ID</th> -->
			    <th class="text-center">Título</th>
			    <th class="text-center">Tipo de Archivo</th>
			    <th class="text-center">Ruta del Archivo</th>
			    <th class="text-center">Tamaño del archivo</th>
			    <th class="text-center">Descripción</th>
			    <!--<th class="text-center">Materia</th>-->
			    <th class="text-center">Curso</th>
			   
=======
			    <th>ID</th>
			    <th>Título</th>
			    <th>Descargar Archivo</th>
			    <th>Ruta del Archivo</th>
			    <th>Tipo de Archivo</th>
			    <th>Tamaño del archivo</th>
			    <th>Descripción</th>
			    <th>Materia</th>
			    <th>Curso</th>
>>>>>>> 40051189b36bad4099a1cd621422c77bfced3254
			    <!-- <th>Profesor</th> -->
			</tr>
		    </thead>
		    

			<!-- Acá llamo a la bd -->
			<?php
			    include('conexion.php');
			    $query = "SELECT * FROM archivos where fk_materia= '2'";
			    $res = mysqli_query($conexion,$query);
			    while ($row = $res->fetch_assoc()){
			?>    

			<!--  Acá muestro el contenido de la bd -->
<<<<<<< HEAD

			

			<tbody>
=======
>>>>>>> 40051189b36bad4099a1cd621422c77bfced3254
			<tr>
			<!-- <td><?php echo $row['id']; ?></td> -->
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['tipo']; ?></td>
			<td><a href="<?php $row['ruta'] ?>">File Name</a></td>
			<td><?php echo $row['size']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<!--<td><?php echo $row['fk_materia']; ?></td>-->
			<td><?php echo $row['fk_curso']; ?></td>
			<td><a href="modificar.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-raised btn-sm"><i class="zmdi zmdi-refresh"></i> Modificar</a></td>
			<td><a href="eliminar.php?id=<?php echo $row ['id']?>" class="btn btn-danger btn-raised btn-sm"><i class="zmdi zmdi-delete"></i> Eliminar</a></td>
			</tr>
			<?php } ?>
		    </tbody>
	    	</table>
	    </div>
	</div>
		<br>

	   
	
    
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

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>