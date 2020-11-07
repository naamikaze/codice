<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
	<body>
	    <?php 
	
	    include('conexion.php');
	    $idd = $_REQUEST['id'];
	    $query = "SELECT * FROM archivos WHERE id = '$idd'"; 
	    $resultado = $conexion->query($query);
	    $row = $resultado -> fetch_assoc();

	    ?>
	</body>
	<form action="guardar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">

	    <h1>Modificacion de archivo</h1>

    <input id="archivo" REQUIRED type="file" name="archivo" >

<br>

        <label>Ingrese el título del archivo</label><br>
        <input type="text"  REQUIRED id="titulo" name="titulo" placeholder="Ingresar título"><br><br>


        <label>Descripción del archivo</label><br>
        <textarea rows="5"  REQUIRED cols="100" name="desc" placeholder="Redacte una descripción sobre el archivo" id="descripcion"></textarea><br><br>

        <label>Seleccione la materia</label><br>
        <select class="form-control" id="materia" name="materia">
            <option value="no" disabled="disabled" selected="true">Materias</option>
            <option value="1">bombace</option>
            <option value="2">pancracio</option>

        </select><br><br>

        <label>Seleccione alguno de los cursos</label><br>
        <select class="form-control" id="curso" name="curso">
            <option value="no" disabled="disabled" selected="true">Seleccione un curso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>

	<br>
	
	<button id="cargar">Ingresar Archivo</button>
  



	</form>
    </head>
</html>
