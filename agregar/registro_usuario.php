<?php
    include('../conexion.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['pass'];
    $consulta = "INSERT INTO usuario (usuario, nombre, apellido, contraseña) VALUES ('".$usuario."', '".$nombre."', '".$apellido."', '".$password."')";
    $ejecutar = mysqli_query($cadena_conexion, $consulta);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="alert alert-success" role="alert">
            ¡Felicidades!, tu usuario a sido registrado existosamente.
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <a href="index.html"button type="button" class="btn btn-success">Agregar otro usuario</button></a>
        </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>