<?php
include('conexion.php');

$ruta = "upload/";
$nombrefinal = trim ($_FILES['archivo']['name']); //Se eliminan los espacios en blanco
$nombrefinal = mb_ereg_replace(" ", "", $nombrefinal); //Sustituye los espacios por nada
$upload = $ruta . $nombrefinal;


move_uploaded_file($_FILES['archivo']['tmp_name'], $upload);

$titulo = $_POST['titulo']; 
$desc = $_POST['desc']; 
$materia = $_POST['materia']; 
$curso = $_POST['curso']; 

//$_SESSION['userID'] = $profesor;

$query = "INSERT INTO `archivos`( `nombre`, `descripcion`, `ruta`, `tipo`, `size`, `fk_materia`, `fk_curso`) VALUES ('".$titulo."', '".$desc."' , '".$nombrefinal."' , '".$_FILES['archivo']['type']."' , '".$_FILES['archivo']['size']."' , '".$materia."' , '".$curso."')";

mysqli_query($conexion,$query);


    
?>
