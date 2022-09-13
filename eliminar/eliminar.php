<?php
    include('../conexion.php');
    $codigo = $_POST['a'];
    $consulta = "Delete from usuario where codigo_usuario = ".$codigo;
    $ejecutar = mysqli_query($cadena_conexion, $consulta);
    header("location: index.php");
?>