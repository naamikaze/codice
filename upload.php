<?php
include('conexion.php');

$archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
$titulo = $_POST['titulo']; 
$desc = $_POST['desc']; 
$materia = $_POST['materia']; 
$curso = $_POST['curso']; 


$profesor= "SELECT pk_profesores FROM profesores WHERE nombre AND apellido = '$profesor'";

$query = "INSERT INTO `archivos`( `nombre`, `descripcion`, `archivo`, `fk_materia`, `fk_curso`, `fk_profesor`) VALUES ('".$titulo."', '".$desc."' , '".$archivo."' , '".$materia."' , '".$curso."' , '".$profesor."')";

mysqli_query($conexion,$query);


    
?>
