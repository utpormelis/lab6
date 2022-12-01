<?php 
 require_once("vendor/autoload.php");
 $cadena="mongodb+srv://usuario:d123456@basedatos.4vtwnwb.mongodb.net/?retryWrites=true&w=majority";
 $cliente = new MongoDB\Client($cadena);
 $conexion=$cliente->selectDataBase("basedatos");

 $tablaColeccion=$conexion->usuario;

 $resultado=$tablaColeccion->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($_GET["id"])]);
 echo "Registros eliminados ".$resultado->getDeletedCount();
 ?>