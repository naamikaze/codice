<?php
       date_default_timezone_set('America/Argentina/Buenos_Aires');
       $conexion= mysqli_connect("localhost","root","","melon");


if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {

        $query = "SELECT pk_profes , usuario , contra from profesores where usuario = '".$_POST['username']."' and contra = '".$_POST['password']."' ";

        $resultado = mysqli_query($conexion,$query);
        $res = mysqli_fetch_array($resultado);
        if(!empty($resultado) && mysqli_num_rows($resultado) > 0){
            session_start();
            $_SESSION['user_id'] = $res[0]['pk_usuario'];
            header("Location: subida.php");

        }else
        {
            header("Location: login.html");
        }

    }else
    {
        header("Location: login.html");
    }
}
?>
