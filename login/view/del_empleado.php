<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$id=$_POST['tid'];
 
borrar_empleado($id);
header("Location: empleado.php");
?>