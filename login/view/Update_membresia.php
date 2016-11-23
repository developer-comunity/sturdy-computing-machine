<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
var_dump($_POST);
$id=$_POST['clave'];
$nombre=$_POST['Anombre'];
$precio=$_POST['Aprecio'];
$cantidad=$_POST['Acantidad'];
 
Update_membresia($id, $nombre, $precio, $cantidad);
header("Location: membresia.php");
?>