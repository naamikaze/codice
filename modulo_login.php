<?php  

       date_default_timezone_set('America/Argentina/Buenos_Aires');
       $conexion= mysqli_connect("localhost","root","","codice");

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['usuario'] ) && isset( $_POST['contra'] ) ) {
        
        $query = "SELECT pk_alumnos , usuario , contra from alumnos where usuario = '".$_POST['usuario']."' and contra = '".$_POST['contra']."' ";  
    
        $resultado = mysqli_query($conexion,$query);
        $res = mysqli_fetch_array($resultado);
        if(!empty($resultado) && mysqli_num_rows($resultado) > 0){
            session_start();
            $_SESSION['user_id'] = $res[0]['pk_alumnos'];
            header("Location: pagina.php");

        }else
        {
            header("Location: login.php");
        }
    	
    }else
    {
        header("Location: login.php");
    }
}
?>