<?php
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       // ACA PUEDO HACER ALGO SI ESTA LOGUEADO !
        include('librerias.html');
    } else { 
        header("Location: login.php");
    }   

    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Archivos subidos</title>
	<body>
	    <div class="container">
	    	<table border="1">
		    <thead>
			<tr>
			    <th>ID</th>
			    <th>Título</th>
			    <th>Descargar Archivo</th>
			    <th>Ruta del Archivo</th>
			    <th>Tipo de Archivo</th>
			    <th>Tamaño del archivo</th>
			    <th>Descripción</th>
			    <th>Materia</th>
			    <th>Curso</th>
			    <!-- <th>Profesor</th> --!>
			</tr>
		    </thead>
		    <tbody>

			<!-- Acá llamo a la bd !-->
			<?php
			    include('conexion.php');
			    $query = "SELECT * FROM archivos";
			    $res = mysqli_query($conexion,$query);
			    while ($row = $res->fetch_assoc()){
			?>    

			<!--  Acá muestro el contenido de la bd --!>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['tipo']; ?></td>
			<td><a href="download.php">File Name</a></td>
			<td><?php echo $row['size']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<td><?php echo $row['fk_materia']; ?></td>
			<td><?php echo $row['fk_curso']; ?></td>
			</tr>
			<?php } ?>
		    </tbody>
	    	</table>
	    </div>
	</body>
    </head>
</html>
