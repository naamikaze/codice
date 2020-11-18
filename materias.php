<!DOCTYPE html>
<html lang="es">
<head>
	<title>Materias</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body style="background-color: #CFCCCC">
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
					<a href="index.php">
						<i class="zmdi zmdi-balance zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				
				<li>
					<a href="materias.php" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> ARCHIVOS 
					</a>

				</li>
				<li>
					<a href="archivos_mostrar.php" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-layers"></i> ARCHIVOS (Solo Profesores) 
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

<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Materias <small>Archivos</small></h1>
			</div>
		</div>
		<div clss="full-box text-center" style="padding: 30px 10px;">

			<a href="archivos.php?materia=1"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					MATEMATICAS
				</div>
				<div class="full-box text-center">
					<img src="assets/img/matematicas.png" width="120px" style="padding-top: 50px">
				</div>
				
			</article></a>

			<a href="archivos.php?materia=2"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					HISTORIA
				</div>
				<div class="full-box text-center">
					<img src="assets/img/historia.png" width="120px" style="padding-top: 50px">
				</div>
				
			</article></a>

			<a href="archivos.php?materia=3"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					P. DEL LENGUAJE
				</div>
				<div class="full-box text-center">
					<img src="assets/img/lengua.png" width="120px" style="padding-top: 50px">
				</div>
				
			</article></a>

			<a href="archivos.php?materia=4"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					GEOGRAFIA
				</div>
				<div class="full-box text-center">
					<img src="assets/img/geografia.png" width="120px" style="padding-top: 50px">
				</div>
				
			</article></a>

			<a href="archivos.php?materia=5"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					INGLES
				</div>
				<div class="full-box text-center">
					<img src="assets/img/ingles.png" width="120px" style="padding-top: 50px">
				</div>
				
			</article></a>

			<a href="archivos.php?materia=6"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				PROGRAMACION
				</div>
				<div class="full-box text-center">
					<img src="assets/img/programacion.png" width="120px" style="padding-top: 50px">
				</div>
				
			</article></a>

			<a href="archivos.php?materia=7"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					GEOGRAFIA
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				
			</article></a>
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
