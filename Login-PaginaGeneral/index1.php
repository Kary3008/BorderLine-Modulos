<?php
include "validarfrom.php";
if(isset($_POST['login'])){
$correo = $_POST['correo'];
$pass = $_POST['pass'];
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">

 
   <div class="form">
     <h3 class="text-center py-4"></h3>

     <form class="login1-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
        <input type="text"  class="form-control" placeholder="Usuario" name="correo" value="<?php if (isset($correo)) echo $correo; ?>"> 
    
        <input type="password"  class="form-control" placeholder="Password" id="pass" name="pass" value="<?php if (isset($pass)) echo $pass; ?>">
           <div class="custom-control custom-switch">
               <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
               <label class="custom-control-label" for="ver">Ver Password</label>
           </div>     
        <button type="submit" value="boton" id="idBoton" name="login" class="btn btn-success btn-sm btn-block" >Iniciar Sesión </button>

       <div class="col">
         <a href="#" class="text-muted text-decoration-none" data-toggle="modal" data-target="#RegistroModal">Resgistrate</a>
       </div>

     <?php echo $erroremail; ?><br>
     <?php echo $errorpass; ?><br>
     <?php echo $errorusuar; ?><br>

   </form>
  </div>
</div>
<script type="text/javascript">
  function verpass(cb){
      if (cb.checked)
      $('#pass').attr("type","text");
      else 
      $('#pass').attr("type","password");
  }
</script>


<!-- Modal -->
<div class="modal fade" id="RegistroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
         <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registro de usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
           </div>
           <div class="modal-body">
               <div class="container">
                 <from actiotion="registro.php" method="post" name="Formregistro" id="Formregistro" >
               <div class="form-row">
                 <div class="form-group col-md-12">
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="NombreU">
               </div>
               </div>
                 <div class="form-row">
                   <div class="form-group col-md-6">
                     <input type="text" name="nombre" class="form-control" placeholder="Apellido Paterno" id="apellidoP">
                   </div> 
                   <div class="form-group col-md-6">
                     <input type="text" name="nombre" class="form-control" placeholder="Apellido Materno" id="apellidoM">
                   </div> 
                 <div class="form-row">
                   <div class="form-group col-md-12">
                     <label for="apellidoP">Fecha de Nacimiento</label> 
                     <input type="date" name="fecha" class="form-control" id="apellidoP">
                   </div> 
                 </div>
                 <div class="form-row">
                   <div class="form-group col-md-6">
                       <select class="custom-select my-1 mr-ms-2 " name="genero" id="genero">
                         <option selected>Selecciona Genero</option>
                         <option value="1">Masculino</option>
                         <option value="2">Femenino</option>
                       </select>  
                     </div> 
                  </div> 
                      <div class="form-group col-md-6">
                         <input type="tel" name="telefono" class="form-control" placeholder="telefono">
                       </div> 
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <select class="custom-select my-1 mr-sm-2" name="carrera" id="carrera">
                          <option selected>Selecciona la Carrera</option>
                          <option value="1">Informarica</option>
                          <option value="2">Contabilidad</option>
                          <option value="3">Horpitalidad turisticas</option>
                       </select>  
                     </div>
                    </div>  
                   <div class="form-group col-md-6">
                      <select class="custom-select my-1 mr-sm-2" name="semestre" id="semestre">
                       <option selected>Selecciona el semestre</option>
                       <option value="1">1ro</option>
                       <option value="2">2do</option>
                       <option value="3">3ro</option>
                     </select>  
                   </div> 
                 <div class="form-row">
                    <div class="form-group col-md-6">
                      <select class="custom-select my-1 mr-sm-2" name="grupo" id="grupo">
                       <option selected>Selecciona el grupo</option>
                       <option value="1">505</option>
                       <option value="2">506</option>
                     <select>  
                   </div>
                  </div>  
                   <div class="form-group col-md-6">
                     <select class="custom-select my-1 mr-sm-2" name="plantel" id="plantel">
                       <option selected>Selecciona la Carrera</option>
                       <option value="1">Naucalpan 1</option>
                       <option value="2">Atizapan</option>
                       <option value="3">Gustavo Baz</option>
                     <select>  
                   </div> 
               <div class="form-row">
                 <div class="form-group col-md-12">
                   <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                 </div> 
               </div>
               <div class="form-row">
                 <div class="form-group col-md-12">
                   <input type="password" name="password" class="form-control" placeholder="Password" >
                 </div> 
               </div>
               <div class="form-row">
                 <div class="form-group col-md-12">
                   <input type="text" name="password2" class="form-control" placeholder="Confirma Password">
                 </div> 
                </div>
             <div class="custom-control custom-switch justify-content-left h-100">
                <input type="checkbox" class="custom-control-input" name="checkbox" id="checkbox" onclick="habilitar():">
                <label for="checkbox" class="costum-contol-label">Acepto terminos y condiciones</label>
               </div>
            </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <input type="submit"  name="submit" value="Registrar" class="btn btn-success" desabled>
           </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
    
