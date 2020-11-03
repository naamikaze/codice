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
<html lang="en">
<head>
    <?php
        include("librerias.html");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>

    <div class="container">

        <label>Seleccione el archivo a subir</label><br><br>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
    <span>Elija un archivo</span>
    <br>
    <input id="archivo" type="file" name="archivo" required>
    </div>
<br>

        <label>Ingrese el título del archivo</label><br>
        <input type="text" id="titulo" name="titulo" placeholder="Ingresar título"><br><br>


        <label>Descripción del archivo</label><br>
        <textarea rows="5" cols="100" name="desc" placeholder="Redacte una descripción sobre el archivo" id="descripcion"></textarea><br><br>

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

	<button id="cargar">Ingresar Archivo</button>
  </form>
    </div>  
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
