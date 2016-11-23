<?php
include "sesion.php";
?>
<?php 
require_once 'config.php';

function guardar_producto($nombre, $precio, $presentacion){
	global $conn; 
	$query= "INSERT INTO productos (nombre, precio, presentacion) values ('$nombre', '$precio', '$presentacion')";
mysqli_query($conn, $query);
}

function borrar_producto($id){
	global $conn; 
	$query= "DELETE FROM productos where id='$id'";
mysqli_query($conn, $query);
}

function Update_producto($id, $nombre, $precio, $presentacion){
	global $conn;
	$query= "UPDATE productos set id = $id ,nombre = '$nombre', precio = '$precio', presentacion = '$presentacion' where id = '$id'";
mysqli_query($conn, $query);
}

function guardar_cliente($nombre, $ap_pat, $ap_mat, $telefono, $direccion, $correo, $fechanac, $fechaing, $id_sus, $idempleado,$imagen){
	global $conn; 
	$query= "INSERT INTO cliente (nombre, ap_pat, ap_mat, telefono, direccion, correo, fechanac, fechaing, id_sus, idempleado,imagen) values ('$nombre', '$ap_pat', '$ap_mat', '$telefono', '$direccion', '$correo', '$fechanac', '$fechaing', '$id_sus', '$idempleado','$imagen')";
mysqli_query($conn, $query);
}

function borrar_cliente($id){
	global $conn; 
	$query= "DELETE FROM cliente where id='$id'";
mysqli_query($conn, $query);
}

function Update_cliente($id ,$nombre ,$ap_pat, $ap_mat, $telefono, $direccion, $correo, $fechanac, $fechaing, $id_sus, $idempleado){
	global $conn;
	$query= "UPDATE cliente set id = $id, nombre = '$nombre', ap_pat = '$ap_pat', ap_mat = '$ap_mat', telefono = '$telefono', direccion = '$direccion', correo = '$correo', fechanac = '$fechanac', fechaing = '$fechaing', id_sus = '$id_sus', idempleado = '$idempleado' where id = '$id'";
mysqli_query($conn, $query);
}

function guardar_empleado($nombre, $email, $password , $fecha_nac, $puesto, $sueldo, $imagen, $tipo){
	global $conn; 
	$query= "INSERT INTO empleado (nombre, email, password, fecha_nac, puesto, sueldo, imagen, idTipo) values ('$nombre', '$email', '$password', '$fecha_nac', '$puesto', '$sueldo', '$imagen', '$tipo')";
mysqli_query($conn, $query);
}

function borrar_empleado($id){
	global $conn; 
	$query= "DELETE FROM empleado where id='$id'";
mysqli_query($conn, $query);
}

function Update_empleado($id, $nombre, $email, $password, $fecha_nac, $puesto, $sueldo, $tipo){
	global $conn;
	$query= "UPDATE empleado set id = $id, nombre = '$nombre', email= '$email', password = '$password', fecha_nac = '$fecha_nac', puesto = '$puesto', sueldo = '$sueldo', idTipo = '$tipo' where id = '$id'";
mysqli_query($conn, $query);
}

function guardar_membresia($nombre, $precio, $cantidad){
	global $conn; 
	$query= "INSERT INTO suscripciones (nombre, precio, cantidad) values ('$nombre', '$precio', '$cantidad')";
mysqli_query($conn, $query);
}

function borrar_membresia($id){
	global $conn; 
	$query= "DELETE FROM suscripciones where id='$id'";
mysqli_query($conn, $query);
}

function Update_membresia($id, $nombre, $precio, $cantidad){
	global $conn;
	$query= "UPDATE suscripciones set id = $id ,nombre = '$nombre', precio = '$precio', cantidad = '$cantidad' where id = '$id'";
mysqli_query($conn, $query);
}

function guardar_venta($id_producto, $nombre, $precio, $cantidad, $fecha_venta){
	global $conn; 
	$query= "INSERT INTO venta (id_producto, nombre, precio, cantidad, fecha_venta) values ('$id_producto', '$nombre', '$precio', '$cantidad', '$fecha_venta')";
mysqli_query($conn, $query);
}

function borrar_venta($id){
	global $conn; 
	$query= "DELETE FROM venta where id='$id'";
mysqli_query($conn, $query);
}

function Update_venta($id, $id_producto, $nombre, $precio, $cantidad, $fecha_venta){
	global $conn;
	$query= "UPDATE venta set id = $id, id_producto = '$id_producto', nombre = '$nombre', precio = '$precio', cantidad = '$cantidad', fecha_venta = '$fecha_venta' where id = '$id'";
mysqli_query($conn, $query);
}

function guardar_detalle($id_sus, $id_cliente, $nombre, $importe, $dia){
	global $conn; 
	$query= "INSERT INTO detallesus (id_sus, id_cliente, nombre, importe, dia) values ('$id_sus', '$id_cliente', '$nombre', '$importe', '$dia')";
mysqli_query($conn, $query);
}

function borrar_detalle($id){
	global $conn; 
	$query= "DELETE FROM detallesus where id='$id'";
mysqli_query($conn, $query);
}

function Update_detalle($id, $id_sus, $id_cliente, $nombre, $importe, $dia){
	global $conn;
	$query= "UPDATE detallesus set id_sus = '$id_sus', id_cliente = '$id_cliente', nombre = '$nombre', importe = '$importe', dia = '$dia' where id = '$id'";
mysqli_query($conn, $query);
}

function guardar_usuario($clave, $nombre, $apellido, $contrasenia, $privilegio){
	global $conn; 
	$query= "INSERT INTO usuario (clave, nombre, apellido, contrasenia, privilegio) values ('$clave', '$nombre', '$apellido', '$contrasenia', '$privilegio')";
mysqli_query($conn, $query);
}

function borrar_usuario($clave){
	global $conn; 
	$query= "DELETE FROM usuario where clave='$clave'";
mysqli_query($conn, $query);
}

function Update_usuario($clave ,$nombre ,$apellido, $contrasenia, $privilegio){
	global $conn;
	$query= "UPDATE usuario set clave = '$clave', nombre = '$nombre', apellido = '$apellido', contrasenia = '$contrasenia', privilegio = '$privilegio' where clave = '$clave'";
mysqli_query($conn, $query);
}

function borrar_relacion($id_familiar){
	global $conn; 
	$query= "DELETE FROM familiar_alumno where id_familiar='$id_familiar'";
mysqli_query($conn, $query);
}

function Update_relacion($id_familiar ,$matricula){
	global $conn;
	$query= "UPDATE familiar_alumno set id_familiar = '$id_familiar', matricula='$matricula' where id_familiar = '$id_familiar'";
mysqli_query($conn, $query);
}

function Asignar_familiar($alumno, $familiar){
global $conn;
$query= "INSERT familiar_alumno (id_familiar, matricula) values ('$familiar', '$alumno')";
mysqli_query($conn,$query);
}

