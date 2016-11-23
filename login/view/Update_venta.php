<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
var_dump($_POST);
$id=$_POST['clave'];
$id_producto=$_POST['Aid_producto'];
$nombre=$_POST['Anombre'];
$precio=$_POST['Aprecio'];
$cantidad=$_POST['Acantidad'];
$fecha_venta=$_POST['Afecha_venta'];
 
Update_venta($id, $id_producto, $nombre, $precio, $cantidad, $fecha_venta);
header("Location: Venta.php");
?>