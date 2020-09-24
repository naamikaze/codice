<?php
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       // ACA PUEDO HACER ALGO SI ESTA LOGUEADO !
        include('librerias.html');
    } else {
       
        header("Location: login.php");
    }   

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALTO PEBETE</h1>
    <form action="cerrar_sesion.php" method="post">
<button class="btn btn-danger" type="submit" >Cerrar Sesion</button>
</form>
</body>
</html>