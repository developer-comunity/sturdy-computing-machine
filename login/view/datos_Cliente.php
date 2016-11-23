<?php 
require_once 'config.php';
global $conn;
$query = mysqli_query($conn,"SELECT id, nombre, ap_pat, ap_mat, telefono, direccion, correo, fechanac, fechaing, id_sus, idempleado,imagen from cliente ");
$tabla="";

while($consulta_cliente = mysqli_fetch_array($query))
{
	$id=$consulta_cliente['id'];
	$nombre=$consulta_cliente['nombre'];
	$ap_pat=$consulta_cliente['ap_pat'];
	$ap_mat=$consulta_cliente['ap_mat'];
	$telefono=$consulta_cliente['telefono'];
	$direccion=$consulta_cliente['direccion'];
	$correo=$consulta_cliente['correo'];
	$fechanac=$consulta_cliente['fechanac'];
	$fechaing=$consulta_cliente['fechaing'];
	$id_sus=$consulta_cliente['id_sus'];
	$idempleado=$consulta_cliente['idempleado'];
	$img = $consulta_cliente['imagen'];

	$eliminar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminarCliente('.$id.')\">Borrar</a>';

	$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificarCliente('.chr(39).$id.chr(39).",".chr(39).$nombre.chr(39).",".chr(39).$ap_pat.chr(39).",".chr(39).$ap_mat.chr(39).",".chr(39).$telefono.chr(39).",".chr(39).$direccion.chr(39).",".chr(39).$correo.chr(39).",".chr(39).$fechanac.chr(39).",".chr(39).$fechaing.chr(39).",".chr(39).$id_sus.chr(39).",".chr(39).$idempleado.chr(39).')\">Modificar</a>';

	$mostrarImagen = '<a title=\"Imagen\" href=\"#\" onclick=\"mostrarImagen('.chr(39).$img.chr(39).')\">Imagen</a>';

	$tabla.='{"id":"'.$id.'","nombre":"'.$nombre.'","ap_pat":"'.$ap_pat.'","ap_mat":"'.$ap_mat.'","telefono":"'.$telefono.'","direccion":"'.$direccion.'","correo":"'.$correo.'","fechanac":"'.$fechanac.'","fechaing":"'.$fechaing.'","id_sus":"'.$id_sus.'","idempleado":"'.$idempleado.'","action":"' .$modificar."&nbsp".$eliminar."&nbsp".$mostrarImagen.'"},';
}

$tabla=substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":['.$tabla.']}';