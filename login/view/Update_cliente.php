<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
var_dump($_POST);
$id=$_POST['clave'];
$nombre=$_POST['Mnombre'];
$ap_pat=$_POST['Map_pat'];
$ap_mat=$_POST['Map_mat'];
$telefono=$_POST['Mtelefono'];
$direccion=$_POST['Mdireccion'];
$correo=$_POST['Mcorreo'];
$fechanac=$_POST['Mfechanac'];
$fechaing=$_POST['Mfechaing'];
$id_sus=$_POST['Mid_sus'];
$idempleado=$_POST['Midempleado'];
 
Update_cliente($id, $nombre, $ap_pat, $ap_mat, $telefono, $direccion, $correo, $fechanac, $fechaing, $id_sus, $idempleado);
header("Location: cliente.php");
?>