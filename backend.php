<?php
//Llamo el archivo que conecta todo con la bd
include('conexion.php');

//Empiezo a llamar los datos del JavaScript.
    $nombre = $_POST['nombre'];
    $archivo = $_POST['archivo'];
    $desc = $_POST['desc'];
    $materia = $_POST['materia'];
    $curso = $_POST['curso'];

//Una vez llamados los datos los inserto en las respectivas tablas de la bd.

$query = "INSERT INTO `archivos`( `nombre`, `desc`, `materia`, `curso`) VALUES ('".$nombre."', '".$desc."', '".$materia."', '".$curso."')";

//Insertado todo ejecuto el comando.
mysqli_query($conexion,$query);
?>
