<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$nombre=$_POST['nombre_producto'];
$precio=$_POST['precio_producto'];
$presentacion=$_POST['presentacion'];



guardar_producto($nombre, $precio, $presentacion);
header("Location: Producto.php");
?>