<?php
    include('librerias.html');
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       // ACA PUEDO HACER ALGO SI ESTA LOGUEADO !
        include('librerias.html');
    } else { 
        header("Location: login_profesores.php");
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
		<a href="subida_archivo.php"><button class='btn btn-success'>Subir Nuevo</button></a>
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
			    <!-- <th>Profesor</th> -->
			</tr>
		    </thead>
		    <tbody>

			<!-- Acá llamo a la bd -->
			<?php
			    include('conexion.php');
			    $query = "SELECT * FROM archivos";
			    $res = mysqli_query($conexion,$query);
			    while ($row = $res->fetch_assoc()){
			?>    

			<!--  Acá muestro el contenido de la bd -->
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['tipo']; ?></td>
			<td><a href="<?php $row['ruta'] ?>">File Name</a></td>
			<td><?php echo $row['size']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<td><?php echo $row['fk_materia']; ?></td>
			<td><?php echo $row['fk_curso']; ?></td>
			<td><a href="modificar.php?id=<?php echo $row['id'] ?>">Modificar</a></td>
			<td><a href="eliminar.php?id=<?php echo $row ['id']?>">Eliminar</a></td>
	</tr>
			<?php } ?>
		    </tbody>
	    	</table>
		<br>

	    </div>
	</body>
    </head>
</html>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

