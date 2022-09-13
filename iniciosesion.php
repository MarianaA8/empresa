<?php
    include('conexion.php');
    $user = $_POST['usuario'];
    $pass = $_POST['pass'];
    $consulta = "SELECT * FROM usuario Where usuario = '".$user."'";
    $ejecutar = mysqli_query($cadena_conexion,$consulta);
    while ($ver = mysqli_fetch_array($ejecutar))
    {
        $usuario = $ver['usuario'];
        $nombre = $ver['nombre'];
        $apellido = $ver['apellido'];
        $password = $ver['contraseña'];
    }

    if (($usuario == $user) && ($password == $pass)){
        header("location: principal.html");
    }
?>