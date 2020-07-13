<?php
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       // ACA PUEDO HACER ALGO SI ESTA LOGUEADO !
        include('librerias.html');
         echo $_SESSION['user_id'];
    } else {
       echo $_SESSION['user_id'];
        header("Location: index.php");
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
         <h2>Bienvenido <?php echo $_SESSION['user_id']; ?></h2>
         <p>¿Qué desea hacer?</p>
         <a href="subida.php"><button>Subir Archivos</button></a>
<form action="cerrar_sesion.php" method="post">
<button class="btn btn-danger" type="submit" >CERRAR SESION</button>
</form>

     </body>
</html>
