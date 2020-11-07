
<?php
include('conexion.php');

$id = $_REQUEST['id'];

$query = "DELETE FROM archivos WHERE id = '$id'";

$resultado = mysqli_query($conexion,$query);

if($resultado){
    header('Location: archivos_mostrar.php');

}

else {
	echo "No se eliminó";
}

    
?>
