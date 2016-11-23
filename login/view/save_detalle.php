<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$id_sus=$_POST['id_sus'];
$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$importe=$_POST['importe'];
$dia=$_POST['dia'];


guardar_detalle($id_sus, $id_cliente, $nombre, $importe, $dia){
header("Location: detalle.php");
?>