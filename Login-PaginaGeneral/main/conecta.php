<<?php
$servidor="localhost";
$usuario="root";
$password="";
$base ="informatica";
$conecta= mysql_connect($servidor,$usuario,$password,$base);
if ($conecta->connect_error) {
  die('Error al conectar la Base de datos'.$conecta->connect_error);
}


 ?>
