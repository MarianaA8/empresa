<?php
        include('../conexion.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Lista de Usuarios</h1>
                <table class="table table-success table-striped">
                        <th>Usuarios</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acción</th>
                        <?php 
                                $consulta = "SELECT * FROM usuario";
                                $ejecutar = mysqli_query($cadena_conexion,$consulta);
                                while ($ver = mysqli_fetch_array($ejecutar))
                                {
                                $usuario = $ver['usuario'];
                                $nombre = $ver['nombre'];
                                $apellido = $ver['apellido'];
                                $codigo_usuario = $ver['codigo_usuario'];
                        ?>
                        
                        <form method="POST" action="update.php">
                                <tr>
                                        <td><input type="text" name="usuario" value="<?php echo $usuario; ?>"></td>
                                        <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
                                        <td><input type="text" name="apellido" value="<?php echo $apellido; ?>"></td>
                                        <td><button type="submit" class="btn btn-warning">Editar</button></td>
                                </tr>
                                        <select name="a" hidden>
                                                <option><?php echo "$codigo_usuario" ?></option>  
                                        </select>
                                        
                        </form>

                        <?php
                                }
                        ?>
                 </table>
                <div class="col">
                    <a href="../index.html"><button type="button" class="btn btn-secondary">Volver</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>