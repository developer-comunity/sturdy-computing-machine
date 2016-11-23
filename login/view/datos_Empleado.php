
<?php 
require_once 'config.php';
global $conn;
$query = mysqli_query($conn,"SELECT id, nombre, email, password, fecha_nac, puesto, sueldo, imagen, idTipo from empleado");
$tabla="";

while($consulta_empleado = mysqli_fetch_array($query))
{
	$id=$consulta_empleado['id'];
	$nombre=$consulta_empleado['nombre'];
	$email=$consulta_empleado['email'];
	$password=$consulta_empleado['password'];
	$fecha_nac=$consulta_empleado['fecha_nac'];
	$puesto=$consulta_empleado['puesto'];
	$sueldo=$consulta_empleado['sueldo'];
	$img = $consulta_empleado['imagen'];
	$tipo = $consulta_empleado['idTipo'];

	$eliminar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminarEmpleado('.$id.')\">Borrar</a>';

	$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificarEmpleado('.chr(39).$id.chr(39).",".chr(39).$nombre.chr(39).",".chr(39).$email.chr(39).",".chr(39).$password.chr(39).",".chr(39).$fecha_nac.chr(39).",".chr(39).$puesto.chr(39).",".chr(39).$sueldo.chr(39).",".chr(39).$tipo.chr(39).'   )\">Modificar</a>';

	$mostrarImagen = '<a title=\"Imagen\" href=\"#\" onclick=\"mostrarImagenE('.chr(39).$img.chr(39).')\">Imagen</a>';

	

	$tabla.='{"id":"'.$id.'","nombre":"'.$nombre.'","email":"'.$email.'","password":"'.$password.'","fecha_nac":"'.$fecha_nac.'","puesto":"'.$puesto.'","sueldo":"'.$sueldo.'","action":"' .$modificar."&nbsp".$mostrarImagen."&nbsp".$eliminar.'"},';
}

$tabla=substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":['.$tabla.']}';