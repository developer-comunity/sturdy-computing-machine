<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$id=$_POST['tid'];
 
borrar_venta($id);
header("Location: Venta.php");
?>