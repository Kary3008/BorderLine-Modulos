<?php
  error_reporting(0);
  session_star  ();
  $mensaje= "";

  include "main/conecta.php";
  if(isset($_POST['ingreso'])){
  $Usuario = $_POST['Usuario'];
  $Contraseña = md5($_POST ['Contraseña']);
  //consulta para extraer los datos de la base de datos del alumno
  $consulta = "SELECT * from Alumno WHERE Usuario = '$Usuario' and Contraseña = '$Contraseña' ";
  if ($resultado = $conecta->query($q)) {
    while ($row = $resultado->fetch_array()) {
      $usuariok =$row['Usuario'];
      $Contraseñaok = $row ['Contraseña'];
    }
  $resultado->close();
  }
  $conecta->close();
  if (isset($Usuario) && isset($Contraseña)) {
    if ($Usuario == $Usuariok && $Contraseña == $Contraseñaok) {
      // code...
      $_SESSION['loguin']=TRUE;
      $_SESSION['Usuario']=$Usuario;
      header("location:../practica de datos.html");
    }
    else {
      header("location:../demo.html");
    }



  }

   }
 ?>
