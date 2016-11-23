<?php
session_start();

if(isset($_SESSION['clave'])){
	$usr=$_SESSION['clave'];
}
else {
	header("Location:login.php");
}
'print_r ($clave);'
?>
