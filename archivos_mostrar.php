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
			    <th>Archivo</th>
			    <th>Descripción</th>
			    <th>Materia</th>
			    <th>Curso</th>
			    <!-- <th>Profesor</th> --!>
			</tr>
		    </thead>
		    <tbody>
			<?php
			    include('conexion.php');
			    $query "SELECT * FROM archivos";
			    $res = mysqli_query($conexion,$query);
			    while ($row = mysqli_fetch_row($res)){

			?>    
			<!--  asd --!>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['titulo']; ?></td>
			<td><?php echo base64_encode($row['archivo']); ?></td>
			<td><?php echo $row['desc']; ?></td>
			<td><?php echo $row['materia']; ?></td>
			<td><?php echo $row['Curso']; ?></td>
			<!-- <td><?//php echo $row['Curso'] ?></td> --!>
			</tr>
			<?php } ?>
		    </tbody>
	    	</table>
	    </div>
	</body>
    </head>
</html>
