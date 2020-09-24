<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fdenaci = $_POST['fdenaci'];
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$query = "INSERT INTO `alumnos`( `nombre`, `apellido` , `fnacimiento` , `dni` , `usuario` , `contra`  ) VALUES ('".$nombre."', '".$apellido."', '".$fdenaci."', '".$dni."', '".$usuario."', '".$contra."')";

mysqli_query($conexion,$query);

?>