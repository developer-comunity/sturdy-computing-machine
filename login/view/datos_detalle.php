<?php 
require_once 'config.php';
global $conn;
$query = mysqli_query($conn,"SELECT id,id_sus, id_cliente, nombre, importe, dia from detallesus");
$tabla="";

while($consulta_detalle = mysqli_fetch_array($query))
{
	$id=$consulta_detalle['id'];
	$id_sus=$consulta_detalle['id_sus'];
	$id_cliente=$consulta_detalle['id_cliente'];
	$nombre=$consulta_detalle['nombre'];
	$importe=$consulta_detalle['importe'];
	$dia=$consulta_detalle['dia'];

	$eliminar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminarDetalle('.$id.')\">Borrar</a>';

	$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificarDetalle('.chr(39).$id.chr(39).",".chr(39).$id_sus.chr(39).",".chr(39).$id_cliente.chr(39).",".chr(39).$nombre.chr(39).",".chr(39).$importe.chr(39).",".chr(39).$dia.chr(39).'   )\">Modificar</a>';

	$tabla.='{"id":"'.$id.'","id_sus":"'.$id_sus.'","id_cliente":"'.$id_cliente.'","nombre":"'.$nombre.'","importe":"'.$importe.'","dia":"'.$dia.'","action":"' .$modificar."&nbsp".$eliminar.'"},';
}

$tabla=substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":['.$tabla.']}';