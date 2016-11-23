<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];
$fecha_nac=$_POST['fecha_nac'];
$puesto=$_POST['puesto'];
$sueldo=$_POST['sueldo'];
$tipo=$_POST['tipo'];

$imagen = "imgE/".date("YmdHis").".jpg";

rename($_FILES['tImagen']['tmp_name'],$imagen);

guardar_empleado($nombre, $email, $password, $fecha_nac, $puesto, $sueldo, $imagen, $tipo);
header("Location: empleado.php");
?>