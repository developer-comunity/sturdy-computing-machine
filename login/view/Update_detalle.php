<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
var_dump($_POST);
$id=$_POST['clave'];
$id_sus=$_POST['Aid_sus'];
$id_cliente=$_POST['Aid_cliente'];
$nombre=$_POST['Anombre'];
$importe=$_POST['Aimporte'];
$dia=$_POST['Adia'];
 
Update_detalle($id, $id_sus, $id_cliente, $nombre, $importe, $dia);
header("Location: detalle.php");
?>