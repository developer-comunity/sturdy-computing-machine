
<?php 
require_once 'config.php';
global $conn;
$query = mysqli_query($conn,"SELECT id, nombre, precio, presentacion from productos ");
$tabla="";

while($consulta_producto = mysqli_fetch_array($query))
{
	$id=$consulta_producto['id'];
	$nombre=$consulta_producto['nombre'];
	$precio=$consulta_producto['precio'];
	$presentacion=$consulta_producto['presentacion'];

	$eliminar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminarProducto('.$id.')\">Borrar</a>';

	$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificarProducto('.chr(39).$id.chr(39).",".chr(39).$nombre.chr(39).",".chr(39).$precio.chr(39).",".chr(39).$presentacion.chr(39).'   )\">Modificar</a>';

	$tabla.='{"id":"'.$id.'","nombre":"'.$nombre.'","precio":"'.$precio.'","presentacion":"'.$presentacion.'","action":"' .$modificar."&nbsp".$eliminar.'"},';
}

$tabla=substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":['.$tabla.']}';