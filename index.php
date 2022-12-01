<?php 
 require_once("vendor/autoload.php");
 $cadena="mongodb+srv://usuario:d123456@basedatos.4vtwnwb.mongodb.net/?retryWrites=true&w=majority";
 $cliente = new MongoDB\Client($cadena);
 $conexion=$cliente->selectDataBase("basedatos");

 $tablaColeccion=$conexion->usuario;

 $resultado=$tablaColeccion->find();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <br>
    <center><h1>Tabla de Usuarios</h1></center>
    <br>
    <div class="container">
        <div class="row">       
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <?php foreach($resultado as $r){?>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $r->_id?></th>
                        <td><?php echo $r->nombre?></td>
                        <td><?php echo $r->apellido?></td>
                        <td><?php echo $r->correo?></td>
                        <td><?php echo $r->Contraseña?></td>
                    </tr>
                </tbody>
                <?php  } ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>




