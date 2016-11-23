<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$nombre=$_POST['nombre_cliente'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$fechanac=$_POST['fechanac'];
$fechaing=$_POST['fechaing'];
$id_sus=$_POST['id_sus'];
$idempleado=$_POST['idempleado'];

$imagen = "img/".date("YmdHis").".jpg";

rename($_FILES['tImagen']['tmp_name'],$imagen);

guardar_cliente($nombre, $ap_pat, $ap_mat, $telefono, $direccion, $correo, $fechanac, $fechaing, $id_sus, $idempleado,$imagen);
header("Location: cliente.php");
?>