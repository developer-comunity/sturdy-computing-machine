<?php
require_once 'config.php';
session_start();
$clave=$_POST['email'];
$contrasenia=$_POST['password'];
$query="SELECT * FROM empleado where email='$clave' and password='$contrasenia'";
global $conn;
$result=mysqli_query($conn, $query);


if($ref = mysqli_fetch_array($result)){

		echo "Acceso Correcto";
		$_SESSION['email']=$clave;

		header("Location: cliente.php");
	}
else
{
	echo "Acceso Denegado";
	header("Location: login.php");
}

?>