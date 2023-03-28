<?php
    session_start();

    $nombre_usuario = $_POST['nombre_usuario_form'];
    $contrasena = $_POST['contrasena_form'];

    echo $nombre_usuario;
    echo "<br>";
    echo $contrasena;
    echo "<br>";
    

    include("../../sql/abre.php");

    $sql = "SELECT nombre_usuario, contrasena FROM $usuarios WHERE nombre_usuario = '" . $nombre_usuario . "' and contrasena='".$contrasena."';";
    $query=mysqli_query($conn,$sql);
    $counter=mysqli_num_rows($query);
    if ($counter==1){
        $_SESSION['user_name'] = $nombre_usuario; // Iniciando la sesion
    } else {
        $usuario_no_coincide = "El usuario y la contraseña no coinciden";	
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>