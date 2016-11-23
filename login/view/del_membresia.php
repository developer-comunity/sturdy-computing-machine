<?php
include "sesion.php";
?>
<?php
require_once 'lib.php';
$id=$_POST['tid'];
 
borrar_membresia($id);
header("Location: membresia.php");
?>