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
      <input type="file" name="uploadedFile" />
    </div>
 
    <input type="submit" name="uploadBtn" value="Subir" />
  </form><br>

        <label>Ingrese el título del archivo</label><br>
        <input type="text" id="titulo" placeholder="Ingresar título"><br><br>

        <label>Descripción del archivo</label><br>
        <textarea rows="5" cols="100" placeholder="Redacte una descripción sobre el archivo" id="descripcion"></textarea><br><br>

        <label>Seleccione la materia</label><br>
        <select class="form-control" id="materia">
            <option value="no" disabled="disabled" selected="true">Materias</option>
            <option value="1">bombace</option>
            <option value="2">pancracio</option>

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