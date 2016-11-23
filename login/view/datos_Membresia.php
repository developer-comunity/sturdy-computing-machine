
<?php 
require_once 'config.php';
global $conn;
$query = mysqli_query($conn,"SELECT id, nombre, precio, cantidad from suscripciones ");
$tabla="";

while($consulta_membresia = mysqli_fetch_array($query))
{
	$id=$consulta_membresia['id'];
	$nombre=$consulta_membresia['nombre'];
	$precio=$consulta_membresia['precio'];
	$cantidad=$consulta_membresia['cantidad'];

	$eliminar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminarMembresia('.$id.')\">Borrar</a>';

	$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificarMembresia('.chr(39).$id.chr(39).",".chr(39).$nombre.chr(39).",".chr(39).$precio.chr(39).",".chr(39).$cantidad.chr(39).'   )\">Modificar</a>';

	$tabla.='{"id":"'.$id.'","nombre":"'.$nombre.'","precio":"'.$precio.'","cantidad":"'.$cantidad.'","action":"' .$modificar."&nbsp".$eliminar.'"},';
}

$tabla=substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":['.$tabla.']}';