<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$id=$_POST['tid'];
 
borrar_detalle($id);
header("Location: detalle.php");
?>