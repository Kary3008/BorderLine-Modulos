
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
    <title>Registro de CoNactive / BorderLine</title>
  </head>
  <body>
    <!-- inicio de contenedor -->
    <div class="container py-4">
        <div class="row justify-content-center h-100 py-4">
          <div class="card col-sm-8 col-md-8 col-lg-8 shadow-lg p-3 mb-5 bg-black rounded">
               <article class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="Aplicacion1.php"><span class="icon-left-big"></span></a> Iniciar Sesión
                        </div>
                        <div class="col">
                          <img src="img/logo.jpg" alt="logotipo Conactive" class="logo">
                          <h4 class="card-title text-left"></span> Registro Conactive</h4>
                        </div>
                    </div>
                   <hr>
                   <p class="text-primary text-center">Ingresa los Datos que se te solicitan</p>
                      <!-- formulario de registro -->
                      <form name="Fregistro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="registro" enctype="multipart/form-data">
                        <div class="row py-2">
                           <div class="col">
                             <select class="caja" name="plantel" id="plantel" required>
                                <option selected>Plantel</option>
                                <?php while($row4 = $resultado4->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row4['Id_Plantel']; ?>"><?php echo $row4['NombreP']; ?></option>
                                <?php } ?>
                             </select>
                           </div>
                        </div>
                        <div class="row py-2">
                           <div class="col">
                              <input type="text" name="Nombre(s)" class="caja" placeholder="Nombre(s)" required>
                           </div>
                           <div class="col">
                              <input type="text" name="email" class="caja" placeholder="Email" required>
                           </div>
                         </div>
                         <div class="row py-2">
                            <div class="col">
                               <input type="text" name="apellidop" class="caja" placeholder="Apallido Paterno" required>
                            </div>
                            <div class="col">
                                 <input type="password" name="pass" class="caja" placeholder="Contraseña" required>
                            </div>
                          </div>
                         <div class="row py-2">
                            <div class="col">
                               <input type="text" name="apellidop" class="caja" placeholder="Apallido Materno" required>
                            </div>
                            <div class="col">
                                <input type="password" name="cpass" class="caja"  placeholder="Confirmar Contraseña" required>
                            </div>
                          </div>
                          <div class="row py-2">
                            <div class="col">
                                 <input type="date" name="fecha" class="caja"  placeholder="Fecha De Nacimiento" required>
                            </div>
                            <div class="col">
                               <input type="text" name="user" class="caja" name="Matricula" placeholder="Matricula" required>
                            </div>
                           </div>

                           <div class="row py-2">
                              <div class="col">
                                <select class="caja" name="semestre" id="semestre" required>
                                   <option selected>Semestre</option>
                                   <?php while($row2 = $resultado2->fetch_assoc()) {  ?>
                                    <option value="<?php echo $row2['Id_Semestre']; ?>"><?php echo $row2['NombreS']; ?></option>
                                   <?php } ?>
                                </select>
                              </div>
                              <div class="col">
                                <select class="caja" name="grupo" id="grupo" required>
                                   <option selected>Grupo</option>
                                   <?php while($row3 = $resultado3->fetch_assoc()) {  ?>
                                    <option value="<?php echo $row3['Id_Grupo']; ?>"><?php echo $row3['Nombre']; ?></option>
                                   <?php } ?>
                                </select>
                              </div>
                           </div>
                           <div class="row py-2">
                               <div class="col">
                                 <select class="caja" name="carrera" id="carrera" required>
                                    <option selected>Carrera</option>
                                    <?php while($row1 = $resultado1->fetch_assoc()) {  ?>
                                     <option value="<?php echo $row1['Id_Carrera']; ?>"><?php echo $row1['NombreC']; ?></option>
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

        <div class="row">
           <div class="col-sm-12 col-md12 col-lg-12 text-center">
              <img src="img/firma.png" alt="">
             <p class="text-center text-muted">CoNactive</p>
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
