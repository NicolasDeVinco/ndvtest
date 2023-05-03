<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

$mail = $_SESSION['mail'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos NDV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/logonegro.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
   

  <header class="header__prueba">
      <div class="logo__container">
          <a href="../index.html"><img src="../images/pruebalogo.png" alt="foto logo NDV" class="logo__container--img"></a>
        </div>
      <nav class="nav__container--ok">
        <ul>
          <li><a href="../inicio.php">Inicio</a></li>
          <li><a href="./acerca_de_ndv.php">Acerca de mí</a></li>
          <li><a href="./planes.php">Planes</a></li>
          <li><a href="./turnos.php">Turnos</a></li>
          <li><a href="./contacto.php">Contacto</a></li>
          <li><a href="./logout.php">Login</a></li>
        </ul>
        <div class="menu-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
  </header>

    <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/hockeyndv.png" alt="Imagen 1">
          </div>
          <div class="carousel-item">
            <img src="../images/futbolndv.png" alt="Imagen 2">
          </div>
          <div class="carousel-item">
            <img src="../images/basquetndv.png" alt="Imagen 3">
          </div>
          <div class="carousel-item">
            <img src="../images/rugbyndv.png" alt="Imagen 2">
          </div>
          <div class="carousel-item">
            <img src="../images/ciclismondv.png" alt="Imagen 3">
          </div>
          <div class="carousel-item">
            <img src="../images/tenisndv.png" alt="Imagen 2">
          </div>
          <div class="carousel-item">
            <img src="../images/natacionndv.png" alt="Imagen 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="slider__deporte">
        <img src="../images/hockeyndv.png" class="slider__deporte--img">
    </div>
    
    <div class="slider__deporte"> 
        <img src="../images/futbolndv.png" class="slider__deporte--img">
    </div>

    <div class="slider__deporte"> 
        <img src="../images/basquetndv.png" class="slider__deporte--img">
    </div>
    
    <div class="slider__deporte">
        <img src="../images/rugbyndv.png" class="slider__deporte--img">
    </div>
    
    <div class="slider__deporte">
        <img src="../images/ciclismondv.png" class="slider__deporte--img">
    </div>
    
    <div class="slider__deporte">
        <img src="../images/tenisndv.png" class="slider__deporte--img">
    </div>
    
    <div class="slider__deporte">
        <img src="../images/natacionndv.png" class="slider__deporte--img">
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="../funciones.js"></script>
</body>
</html>