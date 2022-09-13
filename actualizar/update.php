<?php
    include('../conexion.php');
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $codigo = $_POST['a'];

    $consulta = "UPDATE usuario set usuario = '".$usuario."', nombre = '".$nombre."', apellido = '".$apellido."' Where codigo_usuario = ".$codigo;
    $ejecutar = mysqli_query($cadena_conexion, $consulta);
    header("location: index.php");
    echo $consulta;
?>