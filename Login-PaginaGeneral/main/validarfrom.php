<?php
$erroremail = $errorpass = $errorusuar = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if (!empty($_POST['correo'])){
   if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
   	$email = $_POST['correo'];

   }else{
   	  $erroremail = "*El correo que colocaste no es correcto.";
   }
   }else{
   	  $erroremail = "*Falta el email.";
   }


if(!empty($_POST['pass'])){
	$pass = $_POST['pass'];
}else{
	$errorpass = "*Falta agregar password.";

}
//verificar que los datos no estan vacios
if(!empty($email) && !empty($pass)){


//consultar los datos existentes
	include 'conexion.php';
    $consulta = "SELECT * FROM usuarios WHERE email = '$email' and password ='$pass'";
    $ejecutar = mysqli_query($conexion, $consulta);

//busqueda de valor de la columna selcionada 
    while ($row=$ejecutar -> fetch_assoc()){

    	$user=$row['usuario'];
    }

    if(mysqli_num_rows($ejecutar)>0){
        session_start();
       $_SESSION['usuario'] = $user;
       header ("location: validar.php");
    }else{

    	$errorusuar = "*Usuario y/o constraseña incorrectos";
    }
 }
  }

 ?>