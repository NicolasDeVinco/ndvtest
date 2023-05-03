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
    <title>Contacto NDV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/logonegro.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header__container">
        <div class="logo__container">
        <a href="../index.html"><img src="../images/pruebalogo.png" alt="foto logo NDV" class="logo__container--img"></a>
        </div>
        <nav class="nav__container">
            <div class="nav__links" >
                <a class="link__item" href="../inicio.php">Inicio</a>
                <a class="link__item" href="./acerca_de_ndv.php">Acerca de NDV</a>
                <a class="link__item" href="./planes.php">Planes</a>
                <a class="link__item" href="./turnos.php">Turnos</a>
                <a class="link__item" href="./contacto.php">Contacto</a>
                <p>Hola, <?php echo $mail; ?><a href="logout.php"> Cerrar sesión</a></p>
            </div>
        </nav>
    </header>

    <div class="contacto__container">
        <div class="contacto__container--info">
            <h2 class="contacto__container--title">Datos de contacto:</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.4155758476995!2d-58.472778100000006!3d-34.543031899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6a296c0730d%3A0x3bb9f375ebfecb17!2sAv.%20Cabildo%20%26%20Ramallo%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1680717166989!5m2!1ses!2sar" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contacto__mapa"></iframe>
            <p class="contacto__direccion">Nuñez / Saavedra - CABA - Argentina</p>
            <p class="contacto__insta">Celular: <a href="https://www.instagram.com/nutriciondeportivavital/" class="enlace__redes"> 1135761117 <img src= "../images/whats.png" alt="insta" class="contacto__watsp--logo"></a></a></p>
            <p class="contacto__mail">Horarios: Lunes a Jueves de 10 a 12 y de 15 a 19:30</p>
            <p class="contacto__insta">Instagram: <a href="https://www.instagram.com/nutriciondeportivavital/" class="enlace__redes"> @nutriciondeportivavital <img src= "../images/instagram.png" alt="insta" class="contacto__insta--logo"></a></a></p>
        </div>
        
        <form class="contacto__form" action="https://formspree.io/f/xzbqzvqv"
            method="post">
            <div class="contacto__form--info">
                <h2 class="contacto__form--title">Contactáme</h2>
                    <input type="text" class="form__input--contacto" placeholder="Nombre:" name="name">
                    <input type="text" class="form__input--contacto" placeholder="Apellido:"name="surname">
                    <input type="text" class="form__input--contacto" placeholder="Mail:" name="email">
                    <input type="text" class="form__input--contacto" placeholder="Celular:" name="celular">
                    <textarea class="form__input--contacto form__input--contacto--Message" placeholder="Mensaje:"name="message"></textarea>
                    <input type="submit" value="Enviar" class="submit__azul">
            </div>
        </form>
    </div>

    <footer class="footer__container">
        <div class="footer__container--info">
        <div class="footer__info--nav">
            <nav class="footer__nav">
                <div class="footer__nav--links" >
                    <a class="footer__link--item" href="../inicio.php">Inicio</a>
                    <a class="footer__link--item" href="./acerca_de_ndv.php">Acerca de NDV</a>
                    <a class="footer__link--item" href="./planes.php">Planes</a>
                    <a class="footer__link--item" href="./turnos.php">Turnos</a>
                    <a class="footer__link--item" href="./contacto.php">Contacto</a>
                </div>
            </nav>
        </div>
        <div class="footer__info--direccion">
            <h4>Dirección</h4>
            <p>Av. Cabildo y Av. Ramallo - Nuñez</p>
            <p>CABA - Argentina</p>
        </div>

        <div class="footer__info--horarios">
            <h4>Horarios</h4>
            <h5>Turno mañana</h5>
            <p>Lun-Jue     10:00 am - 12:00 pm</p>
            <h5>Turno tarde</h5>
            <p>Lun-Jue     15:00 am - 19:30 pm</p>
        </div>

        <div class="footer__info--contacto">
            <h4>Contacto</h4>
            <p>+54 9 113576-1117</p>
            <img src="../images/whats.png" alt="logo whatsapp" class="footer__icons">
            <a href="https://www.instagram.com/nutriciondeportivavital/"><img src="../images/instagram.png" alt="logo instagram" class="footer__icons"></a>
        </div>
    </div>

    <div class="footer__registro">
        <P>Derechos reservados - NDV 2023</P>
    </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>