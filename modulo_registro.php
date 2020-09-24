<?php

include('conexion.php');

//Llamo a las variables del Javascript del archivo "registro.php"
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fdenaci = $_POST['fdenaci'];
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

//Subo las variables a la base de datos
$query = "INSERT INTO `alumnos`( `nombre`, `apellido` , `fnacimiento` , `dni` , `usuario` , `contra`  ) VALUES ('".$nombre."', '".$apellido."', '".$fdenaci."', '".$dni."', '".$usuario."', '".$contra."')";

//Ejecto el comando sql
mysqli_query($conexion,$query);

?>