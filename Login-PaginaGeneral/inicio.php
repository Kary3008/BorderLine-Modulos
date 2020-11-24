<?php
 session_start();
 $varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion=''){
    echo "Usted no tiene autorizacion";
    die();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\fontello.css">
    <link rel="stylesheet" type="text/css" href="/css/preloader.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
   <scrip tsrc =" js/jquery-3.5.1.min.js"></script>
    <title>INICIO</title>
  </head>
  <body>
    <!--inicia el preloader de la pagina-->

    <div id="loader">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
    <!--termino el preloader de la pagina-->
    <!--inicia el contenido de la pagina-->
    <div id="contenido">
      <!--Barra de navegacion-->
      <nav class="navbar navbar-expand-lg navbar-light bg-main sticky-top "id="menu">
    <!--aqui se meteria la imagen del Logotipo--> <a class="navbar-brand" href="#">Logotipo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="inicio" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="inicio">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><span class="icon-home"></span>Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Recorrido Virtual\Pagina Recorrido.php"><span class="icon-user"></span>RECORRIDO VIRTUAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="videojuegos\PaginaVideojuegos.html"><span class="icon-mail-alt"></span>VIDEOJUEGOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Control de Dies/Pagina ControlDies.html"><span class="icon-mail-alt"></span>CONTROL DE DIES</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="servicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-menu"></span>servicios
          </a>
          <div class="dropdown-menu" aria-labelledby="servicios">
            <a class="dropdown-item" href="#">Outdanger</a>
            <a class="dropdown-item" href="#">Recorrido virtual</a>
            <a class="dropdown-item" href="#">Juegos interactivos</a>
            <a class="dropdown-item" href="#">Pase de lista digital</a>
          </div>
        </li>
      </ul>
      <!--inicia el codigo del icono de facebook-->
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
          <i class="icon-facebook"></i>
        </li>
        <!--finaliza el codigo del icono de facebook-->

        <!--inicia el codigo del icono de twitter-->
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
          <i class="icon-twitter">  </i>
        </li>
        <!--finaliza el codigo del icono de twitter-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-cog"></span>configuracion
          </a>
          <div class="dropdown-menu" aria-labelledby="opciones">
            <a class="dropdown-item" href="#">Inicio de secion</a>
            <a class="dropdown-item" href="#">ayuda</a>
            <a class="dropdown-item" href="#">cerrar secion</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>
<!--fin de la Barra de navegacion-->

<span class="website-name">Hola <?php echo $_SESSION['usuario']; ?> </span>
    <scrip src="js/bootstrap.min.js"> </script>
    <script src="preloader.js"></script>
    <script src="main.js"></script>
    <a href="cerrarsesion.php" style="te">cerrar sesion</a>
  </body>
</html>
