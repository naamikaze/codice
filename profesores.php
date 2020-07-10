<?php

include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$query = "INSERT INTO `profesores`( `nombre`, `apellido`) VALUES ('".$nombre."', '".$apellido."')";

mysqli_query($conexion,$query);
?>
