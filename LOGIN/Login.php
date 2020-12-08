<?php
  include "../validarfrom.php";
  if(isset($_POST['login'])){
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Inicio | Sesión</title>
  </head>
  <body >
    <!--comienza el apartado del login-->
     <div class="container" style="margin-top: 80px; background: #e6e6fa" >
          <h3 class="text-center py-4"> Inicio de Sesión</h3>
          <!--comienza el apartado de los campoc-->
          <div class="card" style="background: #73c2fb">
                   <h4 align="center"> Bienvenido, por favor ingresa tu Usuario y Password</h4><hr>
               <div class="container">
                 <form class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <input type="text" class="form-control" name="correo" placeholder="Usuario" value="<?php if (isset($correo)) echo $correo; ?>">
                        <br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" value="<?php if (isset($pass)) echo $pass; ?>">
                        <br>
                        <div class="col">
                             <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
                                <label class="custom-control-label" for="ver">Ver Password</label>
                             </div>
                        </div>
                      <input style=" background:#2189ff; margin-top: 25px; width: 50%; margin-left: auto; margin-right: auto;" type="submit" name="login" value="Iniciar sesión" class="btn btn-primary btn-sm btn-block">
                        <div class="boton">
                      <h5 align="center">
                      ¿Aún no te registras?
                      </h5>
                      </div>
                      <div class="contenedor">
                  <a href="../REGISTRO/registro.php"><button style="background:#2189ff ; width: 100%" type="button" class="btn btn-primary">¡Regístrate!</button></a>
                        </div>
                 </form>
               </div>
          </div>
          <!--termina el apartado de los campoc de logeo-->
          <!--empieza la psrte de las politicas de provacidad-->
          <h1> </h1>
          <footer class="poli">
            <a href="politicas(demo).php">Políticas de Privacidad</a>
          </footer>
          <!--terminala parte de las politicas de privacidad-->
        </div>
        <?php echo $erroremail; ?>
        <?php echo $errorpass; ?>
        <?php echo $errorusuar; ?><br>
     <!--termina el apartado del login-->
     <div class="coontainer">
           <p class="text-center">@desarrollo 505</p>
     </div>
  <script type="text/javascript">
  function verpass(cb){
     if (cb.checked)
       $('#pass').attr("type","text");
       else
       $('#pass').attr("type","password");
  }
  </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
