<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];


guardar_membresia($nombre, $precio, $cantidad);
header("Location: membresia.php");
?>