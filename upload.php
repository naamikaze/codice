<?php
include('conexion.php');

$archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
$titulo = $_POST['titulo']; 
$desc = $_POST['desc']; 
$materia = $_POST['materia']; 
$curso = $_POST['curso']; 

//$_SESSION['userID'] = $profesor;


$query = "INSERT INTO `archivos`( `nombre`, `descripcion`, `archivo`, `fk_materia`, `fk_curso`) VALUES ('".$titulo."', '".$desc."' , '".$archivo."' , '".$materia."' , '".$curso."')";

mysqli_query($conexion,$query);


    
?>
