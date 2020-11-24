<?php
$conexion = mysqli_connect('localhost', 'root', '', 'registro');
if (!$conexion){
	die("conexion fallida". mysqli_connect_error());
	exit();
}

?>

