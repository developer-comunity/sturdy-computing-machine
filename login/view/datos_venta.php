
<?php 
require_once 'config.php';
global $conn;
$query = mysqli_query($conn,"SELECT id, id_producto, nombre, precio, cantidad, fecha_venta from venta ");
$tabla="";

while($consulta_venta = mysqli_fetch_array($query))
{
	$id=$consulta_venta['id'];
	$id_producto=$consulta_venta['id_producto'];
	$nombre=$consulta_venta['nombre'];
	$precio=$consulta_venta['precio'];
	$cantidad=$consulta_venta['cantidad'];
	$fecha_venta=$consulta_venta['fecha_venta'];

	$eliminar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminarVenta('.$id.')\">Borrar</a>';

	$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificarVenta('.chr(39).$id.chr(39).",".chr(39).$id_producto.chr(39).",".chr(39).$nombre.chr(39).",".chr(39).$precio.chr(39).",".chr(39).$cantidad.chr(39).",".chr(39).$fecha_venta.chr(39).'   )\">Modificar</a>';

	$tabla.='{"id":"'.$id.'","id_producto":"'.$id_producto.'","nombre":"'.$nombre.'","precio":"'.$precio.'","cantidad":"'.$cantidad.'","fecha_venta":"'.$fecha_venta.'","action":"' .$modificar."&nbsp".$eliminar.'"},';
}

$tabla=substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":['.$tabla.']}';