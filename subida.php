<?php
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       // ACA PUEDO HACER ALGO SI ESTA LOGUEADO !
        include('librerias.html');
         echo $_SESSION['user_id'];
    } else {
       echo $_SESSION['user_id'];
        header("Location: index.php");
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>

<!-- Ingreso de datos  -->
    <div class="container">
        <h1>Subida de Archivos</h1>
        
        <label>Seleccione el archivo a subir *insertar insercion de archivos xD*</label><br><br>
        <label for="">Ingrese el nombre del archivo</label><br/>
        <input name="" type="text" value="" id="nombre" class="form-control" /><br/>
        <label>Descripción del archivo:</label><br><br>
        <textarea rows="5" cols="100" placeholder="Redacte una descripción sobre el archivo" id="desc" class="form-contorl"></textarea><br><br>

        <label>Seleccione alguna de las materias</label><br>
        <select class="form-control" id="materia">
            <option value="no" disabled="disabled" selected="true">Seleccione una materia</option>
            <option value="1">Materia 1</option>
            <option value="2">Materia 2</option>
            <option value="3">Materia 3</option>
            <option value="4">Materia 4</option>
            <p class='que tal'> aaa </p>
           <option value="5">Materia 5</option>

        </select><br><br>

        <label>Seleccione alguno de los cursos</label><br>
        <select class="form-control" id="curso">
            
            <option value="no" disabled="disabled" selected="true">Seleccione un curso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select><br/>
        <button class="btn btn-success" id="subir">Subir</button>
<form action="cerrar_sesion.php" method="post">
<button class="btn btn-danger" type="submit" >CERRAR SESION</button>
</form>
    </div>


    
</body>
</html>
<script>
// Cuando le doy al boton con el id "subir" comienza el script.
 document.getElementById('subir').onclick = function(){
// Llamo a los datos de los input.
 var nombre = document.getElementById('nombre').value;
 var desc= document.getElementById('desc').value;
 var materia = document.getElementById('materia').value;
 var curso = document.getElementById('curso').value;

// Una vez llamados los datos los mando por post hacia el backend.php.
    $.post('backend.php', {nombre:nombre , desc:desc , materia:materia, curso:curso})}
</script>
