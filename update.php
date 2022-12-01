<?php 
 require_once("vendor/autoload.php");
 $cadena="mongodb+srv://usuario:d123456@basedatos.4vtwnwb.mongodb.net/?retryWrites=true&w=majority";
 $cliente = new MongoDB\Client($cadena);
 $conexion=$cliente->selectDataBase("basedatos");

 $tablaColeccion=$conexion->usuario;

  $id = $_GET["id"];
 $resultado=$tablaColeccion->updateOne(["_id"=> new MongoDB\BSON\ObjectId($id)],
                                ['$set'=>[
                                            "nombre" =>$_GET["nombre"],
                                            "apellido"=>$_GET["apellido"],
                                            "comentario"=>$_GET["comentario"]
                                        ]
                                ]);

echo "Cantida de registros actualizados ".$resultado->getModifiedCount();

/*
$resultado=$tablaColeccion->updateOne(["correo"=> $_GET["correo"]],
                                ['$set'=>[
                                            "mensaje"=>$_GET["mensaje"]
                                        ]
                                ]);

echo "Cantida de registros actualizados ".$resultado->getModifiedCount();
*/

 ?>