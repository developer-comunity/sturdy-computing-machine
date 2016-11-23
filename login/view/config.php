<?php
include "sesion.php";
?>
<?php
$host="localhost";
$user="root";
$conn = new mysqli($host,$user);
if($conn->connect_error){ 
	die("Connection failed: ".$conn->connect_error);
}
mysqli_select_db($conn,"gym");
?>