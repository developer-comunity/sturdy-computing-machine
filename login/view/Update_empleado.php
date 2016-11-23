<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
var_dump($_POST);
$id=$_POST['clave'];
$nombre=$_POST['Mnombre'];
$email=$_POST['Memail'];
$contrasena=$_POST['Mpassword'];
$fecha_nac=$_POST['Mfecha_nac'];
$puesto=$_POST['Mpuesto'];
$sueldo=$_POST['Msueldo'];
$tipo=$_POST['Atipo'];

Update_empleado($id, $nombre, $email, $password, $fecha_nac, $puesto, $sueldo, $tipo);
header("Location: empleado.php");
?>