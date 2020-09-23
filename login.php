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

    <form action="login.php" method="post">

        <input type="text" name="username" placeholder="Ingrese su nombre de usuario" required>
        <input type="password" name="password" placeholder="Ingrese su contraseña" required>
        <input type="submit" value="loguear" class="btn btn-primary">

    </form>

    
</body>
</html>