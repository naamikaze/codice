
<?php
include('conexion.php');


$ruta = "upload/";
$nombrefinal = trim ($_FILES['archivo']['name']); //Se eliminan los espacios en blanco
$nombrefinal = mb_ereg_replace(" ", "", $nombrefinal); //Sustituye los espacios por nada
$upload = $ruta . $nombrefinal;


move_uploaded_file($_FILES['archivo']['tmp_name'], $upload);

$id = $_REQUEST['id'];

$titulo = $_POST['titulo']; 
$desc = $_POST['desc']; 
$materia = $_POST['materia']; 
$curso = $_POST['curso']; 
$tipo = $_FILES['archivo']['type'];
$size = $_FILES['archivo']['size'];

//$_SESSION['userID'] = $profesor;

$query = "UPDATE archivos SET nombre='$titulo', descripcion='$desc', ruta='$nombrefinal', tipo='$tipo', size='$size', fk_materia='$materia', fk_curso='$curso' WHERE id = '$id'";

$resultado = mysqli_query($conexion,$query);

if($resultado){
    echo 'Se modifico';

}

else {
	echo "No se modificó";
}

    
?>
