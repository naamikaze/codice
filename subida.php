<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <?php
        include("librerias.html");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>


    <div class="container">

        <label>Seleccione el archivo a subir *insertar insercion de archivos xD*</label><br><br>

        <label>Descripción del archivo:</label><br><br>
        <textarea rows="5" cols="100" placeholder="Redacte una descripción sobre el archivo" id="desc"></textarea><br><br>

        <label>Seleccione alguna de las materias</label><br>
        <select class="form-control" id="materia">
            <option value="no" disabled="disabled" selected="true">Seleccione una materia</option>
            <option value="1">bombace</option>

        </select><br><br>

        <label>Seleccione alguno de los cursos</label><br>
        <select class="form-control" id="curso">
            <option value="no" disabled="disabled" selected="true">Seleccione un curso</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>


    </div>


    
</body>
</html>