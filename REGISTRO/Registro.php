<?php
  error_reporting(0);
  include '../main/conecta.php';
  include '../main/configreg.php';
  // Inicia proceso de registro
  // validamos que se presione al boton registro
  if (isset($_POST['submit'])) {
  // variables de password para validarlos
  $pass = $conecta->real_escape_string($_POST['pass']);
  $cpass = $conecta->real_escape_string($_POST['cpass']);
  // verificamos si los password son diferentes
    if ($pass != $cpass) { //si son diferentes muestra un mensaje
      $mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                    <strong>Password no Coinciden</strong> Por favor verifica tus password que sean iguales.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
    }
  // de lo contrario recuperamos los datos de el usuario a travez de las cajas de texto por el metodo post
    else {
  // recuperamos los valores que nos da el usuario
  $nombre = $conecta->real_escape_string($_POST['nombre']);
  $email = $conecta->real_escape_string($_POST['email']);
  $apellidop = $conecta->real_escape_string($_POST['apellidop']);
  $apellidom = $conecta->real_escape_string($_POST['apellidom']);
  $usern = $conecta->real_escape_string($_POST['usuario']);
  $f_nac = $conecta->real_escape_string($_POST['fecha']);
  $gen = $conecta->real_escape_string($_POST['genero']);
  $grupo = $conecta->real_escape_string($_POST['grupo']);
  $carrera = $conecta->real_escape_string($_POST['carrera']);
  $plantel = $conecta->real_escape_string($_POST['plantel']);
  $passw = md5($pass);
  $estado = "Activo";
  // consulta para verificar si exite un email igual dentro de la base de datos
  $nuevo = "SELECT * FROM usuarios WHERE Correo_U = '$email' or Usuario = '$usern'";
  $new = $conecta->query($nuevo);
  // validacion de el criterio de aceptacion
  if($new->num_rows > 0){
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                  <strong>El usuario y/o Email ya existe</strong> El registro ya existe en la base de datos por favor <a href='index.php'>Click para iniciar sesion</a> .
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                  </button>
                </div>";
  } else {
  // consulta para insertar registro en la base de datos
  $reg = "INSERT INTO alumnos(Nombre_A, ApellidoP_A, ApellidoM_A, Fecha_Nac, Id_Genero, Id_Grupo, Id_Carrera, Id_Plantel)
  VALUES('$nombre','$apellidop','$apellidom','$f_nac','$gen','$grupo','$carrera','$plantel')";
  $registro = $conecta->query($reg);
  $reg1 = "INSERT INTO usuarios(Usuario, Correo_U, Password, Estado)
  VALUES('$usern','$email','$apellidom','$pass','$estado')";
  $registro1 = $conecta->query($reg1);
  // verificamos que el registro sea valido para mandar una alerta
   if ($registro > 0) {
     $mensaje.="<div class='alert alert-success fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                   <strong>Registro Exitoso</strong> Ya puedes Iniciar sesión <a href='../LOGIN/Login.php' class='text-muted text-decoration-none'>Click para iniciar sesion</a> .
                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                   </button>
                 </div>";
              }
          }
      }
  }
  $conecta->close();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- meta descripciones -->
    <meta charset="utf-8">
    <!-- estilos css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <!-- script de jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Registro de CoNactive | BorderLine</title>
  </head>
  <body>
    <!-- inicio de contenedor -->
    <div class="container py-4">
        <div class="row justify-content-center h-100 py-4">
          <div class="card col-sm-8 col-md-8 col-lg-8 shadow-lg p-3 mb-5 bg-black rounded">
               <article class="card-body">
                    <div class="row">
                        <div class="col">
                            <a  href="../LOGIN/Login.php">
                              <span class="icon-left-big"></span>Iniciar Sesión</a>
                        </div>
                        <div class="col">
                          <img src="img/logo.jpg" alt="logotipo Conactive" class="logo">
                        </div>
                        <div class="container text-center">
                          <h3>Registro Conactive</h3>
                        </div>
                    </div>
                   <hr>
                   <p class="text-primary text-center">Ingresa los Datos que se te solicitan</p>
                      <!-- formulario de registro -->
                      <form name="Fregistro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="registro" enctype="multipart/form-data">
                        <div class="row py-2">
                           <div class="col">
                              <input type="text" name="nombre" class="caja" placeholder="Nombre(s)" required>
                           </div>
                           <div class="col">
                              <input type="text" name="email" class="caja" placeholder="Email" required>
                           </div>
                         </div>
                         <div class="row py-2">
                            <div class="col">
                               <input type="text" name="apellidop" class="caja" placeholder="Apellido Paterno" required>
                            </div>
                            <div class="col">
                                 <input type="password" name="pass" class="caja" placeholder="Contraseña" required>
                            </div>
                          </div>
                         <div class="row py-2">
                            <div class="col">
                               <input type="text" name="apellidom" class="caja" placeholder="Apellido Materno" required>
                            </div>
                            <div class="col">
                                <input type="password" name="cpass" class="caja"  placeholder="Confirmar Contraseña" required>
                            </div>
                          </div>
                          <div class="row py-2">
                            <div class="col-12">
                              <input type="text" name="usuario" class="caja"  placeholder="Usuario" required>
                            </div>
                          </div>
                            <div class="row py-2">
                            <div class="col">
                                 <input type="date" name="fecha" class="caja"  placeholder="Fecha De Nacimiento" required>
                            </div>
                            <div class="col">
                            <select class="caja" name="genero" id="genero" required>
                                 <option selected>Selecciona el género</option>
                                 <?php while($row = $resultado->fetch_assoc()) {  ?>
                                  <option value="<?php echo $row['Id_Genero']; ?>"><?php echo $row['Nombre_G']; ?></option>
                                 <?php } ?>
                              </select>
                            </div>
                           </div>
                         <div class="row py-2">
                           <div class="col">
                           <select class="caja" name="grupo" id="grupo" required>
                                <option selected>Selecciona el grupo</option>
                                <?php while($row1 = $resultado1->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row1['Id_Grupo']; ?>"><?php echo $row1['Grupo']; ?></option>
                                <?php } ?>
                             </select>
                           </div>
                              <div class="col">
                                <select class="caja" name="carrera" id="carrera" required>
                                   <option selected>Selecciona la carrera</option>
                                   <?php while($row2 = $resultado2->fetch_assoc()) {  ?>
                                    <option value="<?php echo $row2['Id_Carrera']; ?>"><?php echo $row2['Nombre_Carrera']; ?></option>
                                   <?php } ?>
                                </select>
                              </div>
                           </div>
                           <div class="row py-2">
                               <div class="col">
                                 <select class="caja" name="plantel" id="plantel" required>
                                    <option selected>Selecciona el plantel</option>
                                    <?php while($row3 = $resultado4->fetch_assoc()) {  ?>
                                     <option value="<?php echo $row3['Id_Plantel']; ?>"><?php echo $row3['Nombre_Plantel']; ?></option>
                                    <?php } ?>
                                 </select>
                               </div>
                           </div>
                           <div class="row py-1">
                              <div class="col">
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" id="checkbox" onclick="habilitar();">
                                    <label for="checkbox" class="custom-control-label"><a href="#" class="text-muted text-decoration-none" data-toggle="modal" data-target="#staticBackdrop">Acepto Terminos y Condiciones</label></a>
                                 </div>
                              </div>
                           </div>
                           <div class="row py-1">
                               <input type="submit" name="submit" value="Registrar" class="btn btn-sm btn-block btn-primary" disabled>
                           </div>
                      </form>
                      <!-- termina registro -->
                   </article>
                   <?php echo $mensaje; ?>
            </div>
        </div>

  </div>
  <!-- termina el contenedor -->
  <!-- script de bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- script para habilitar boton registro -->
  <script type="text/javascript">
    function habilitar(){
      document.Fregistro.submit.disabled = !document.Fregistro.checkbox.checked;
    }
  </script>
  </body>
</html>
