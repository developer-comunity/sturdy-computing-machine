<?php
require_once 'lib.php';
$id_venta=$_POST['id_producto'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$fecha_venta=$_POST['fecha_venta'];


guardar_venta($id_venta, $nombre, $precio, $cantidad, $fecha_venta);
?>