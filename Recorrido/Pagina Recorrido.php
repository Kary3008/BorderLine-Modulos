<?php include 'main/conecta.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/fontello.css">
     <link rel="stylesheet" type="text/css" href="css/preloader.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <script src="js/jquery-3.5.1.min.js"></script>
     <title> Recorrido Virtual</title>
  </head>
  <body>
    <!-- inicia preloader de la pagina web -->
     <div id="loader">
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
     </div>
     <!-- termina el preloader de la pagina web -->
    <!-- inicia el contenido de la web -->
     <div id="contenido">
       <!-- inicia barra de navegación -->

       <nav  class="navbar navbar-expand-lg  sticky-top" id="menu">
          <a class="navbar-brand" href="#">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="inicio" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="inicio">
          <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><span class="icon-home"></span> Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span class="icon-users"></span> ¿Por qué?</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#"><span class="icon-book"></span>Blog</a>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="servicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Conócenos
                 </a>
                 <div class="dropdown-menu" aria-labelledby="Conocenos">
                     <a class="dropdown-item" href="#">Áreas</a>
                     <a class="dropdown-item" href="#">Laboratorios</a>
                     <a class="dropdown-item" href="#">Soporte</a>
                 </div>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="icon-facebook"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="icon-twitter"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="icon-bell"></i>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="icon-cog"></span>
               </a>
               <div class="dropdown-menu" aria-labelledby="opciones">
                   <a class="dropdown-item" href="#">Configuración</a>
                   <a class="dropdown-item" href="#">Acerca de</a>
               </div>
            </li>

          </ul>
     </div>
</nav>
<!-- termina barra de navegaciÃ³n -->
      <h1 align="center">BIENVENIDO AL RECORRIDO VIRTUAL DE CONALEP</h1>
<!-- inicia slider -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Plantel</h5>
        <p>En el pantel naucalpan I contamos con bastantes actividades.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nuestro sistema</h5>
        <p>En nuestro sistema contamos con muchas oportunidades para los nuevos y pequeños emprendedores.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Plantel</h5>
        <p>El plantel a pesar de ser uno pequeño a comparacion de otros cuenta con los lavoratorios para que los alumnos realizen sus practicas al igual de tomar sus clases.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- flechas de slider -->
  </div>
<!-- termina slider -->

<div style="background : #73c2fb;width: 18rem;" class="card" >
  <img src="img/tres.jpg" class="card-img-top">
  <div  class="card-body">
    <p class="card-text"> en este recorrido podras conocer nuestro plantel de manera virtual.</p>
  </div>
</div>

  <h1 align="center">¿En que consiste?</h1>
     <h3>En este recorrido virtual se pretende que cel usuario conozca el plantel sin la necesidad de exponerse ante la enfermedad provocada por el virus del covid-19.</h3>
</div>
     </div>
  </div>
    <!-- termina el contenido de la web -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/preloader.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>
