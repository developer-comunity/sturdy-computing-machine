<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$id=$_POST['tid'];
 
borrar_producto($id);
header("Location: Producto.php");
?>