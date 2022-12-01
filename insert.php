<?php
    require_once("vendor/autoload.php");
    $cadena="mongodb+srv://usuario:d123456@basedatos.4vtwnwb.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion=$cliente->selectDataBase("basedatos");

    $tablaColeccion=$conexion->usuario;
    $resultado=$tablaColeccion->insertOne([  "nombre"=>$_GET["n"],
                                             "apellido"=>$_GET["a"],
                                             "correo"=>$_GET["cor"],
                                             "Contraseña"=>$_GET["con"],
                                            "comentario"=>$_GET["cm"]]);

    echo "Se inserto el registro con Id ".$resultado->getInsertedId();
        




?>