<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
include('librerias.html')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Login</title>
</head>

<body>

    <form action="modulo_login.php" method="post">

        <input type="text" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario" required>
        <input type="password" name="contra" id="contra" placeholder="Ingrese su contraseña" required>
        <input type="submit" value="Iniciar Sesion">
    </form>


</body>

</html>