<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('librerias.html');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <!-- Inputs para el registro !-->
    <input type="text" id="nombre" placeholder="Ingrese su nombre">
    <input type="text" id="apellido" placeholder="Ingrese su apellido">
    <input type="date" id="fdenaci" placeholder="Ingrese la fecha de su nacimiento">
    <input type="number" id="dni" placeholder="Ingrese su DNI">
    <input type="text" id="usuario" placeholder="Ingrese un nombre de usuario">
    <input type="password" id="contra" placeholder="Ingrese una constraseña">
   <button id="cargar">Registrarse</button> 
</body>
</html>
<script>
    // Se ejecuta la función cuando se aprieta el boton de 'subir'
    document.getElementById('cargar').onclick = function(){

        //Los id de los input se convierten en variables de JavaScript        
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var fdenaci = $('#fdenaci').val();
        var dni = $('#dni').val();
        var usuario = $('#usuario').val();
        var contra = $('#contra').val();

        console.log(nombre);            
        console.log(fdenaci);

        // Se mandan las variables de JavaScript al archivo php
        $.post('modulo_registro.php', {nombre:nombre , apellido:apellido , fdenaci:fdenaci , dni:dni , usuario:usuario , contra:contra});

        //Se ejecuta una alerta de SweetAlert
        Swal.fire(
        'Todo Listo!',
        'Bienvenido a Códice',
        'success'
        )
    }
</script>