<?php
include('conexion.php');

$archivo = $_FILES["file"];
//$archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
$titulo = $_POST['titulo']; 
$desc = $_POST['desc']; 
$materia = $_POST['materia']; 
$curso = $_POST['curso']; 

//$_SESSION['userID'] = $profesor;

move_uploaded_file($archivo["tmp_name"], "subidas/".$archivo["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);

$query = "INSERT INTO `archivos`( `nombre`, `descripcion`, `archivo`, `fk_materia`, `fk_curso`) VALUES ('".$titulo."', '".$desc."' , '".$archivo."' , '".$materia."' , '".$curso."')";

mysqli_query($conexion,$query);


    
?>
