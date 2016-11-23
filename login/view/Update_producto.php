<?php
require_once 'lib.php';
var_dump($_POST);
$id=$_POST['clave'];
$nombre=$_POST['Anombre'];
$precio=$_POST['Aprecio'];
$presentacion=$_POST['Apresentacion'];
 
Update_producto($id, $nombre, $precio, $presentacion);
header("Location: Producto.php");
?>