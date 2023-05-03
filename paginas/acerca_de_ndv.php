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
    <title>Acerca de NDV</title>
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
            <div class="nav__links">
                <a class="link__item" href="../inicio.php">Inicio</a>
                <a class="link__item" href="./acerca_de_ndv.php">Acerca de NDV</a>
                <a class="link__item" href="./planes.php">Planes</a>
                <a class="link__item" href="./turnos.php">Turnos</a>
                <a class="link__item" href="./contacto.php">Contacto</a>
                <p>Hola, <?php echo $mail; ?><a href="./logout.php"> Cerrar sesión</a></p>
            </div>
        </nav>
    </header>
    
    <div class="historia__container">
        <div class="historia__container--profile">
            <img src="../images/picperfil.jpeg" alt="foto perfil ndv" class="profile__container--img">
        </div>
        <div class="historia__container--info">
            <h1>HISTORIA</h1>
            <p>NDV nace en plena pandemia bajo el nombre de “Nutrición Deportiva Virtual” buscando dar comienzo a un proyecto que apuntaba a brindar educación alimentaria a aquellos y aquellas deportistas recreativas, amateur o profesionales que precisaran información útil al alcance de sus manos.</p>
            <p>Partiendo de esa base y pasada la pandemia, se dio comienzo al NDV actual: “Nutrición Deportiva Vital”, donde se intenta llevar toda la teoría aprendida durante la carrera y sobre todo en los cursos y posgrados de Nutrición Deportiva a la práctica. Teniendo en cuenta que cada persona es un mundo y requiere de necesidades totalmente individuales según sus actividades diarias y deportivas.</p>     
            <p>Siempre con el deporte como motor de todo y con la misión de ayudar a que cada uno cumpla su sueño, es aquí donde paciente y licenciado se proponen alcanzar objetivos que tengan que ver con mejorar el rendimiento deportivo, la estética o la salud.</p>
        </div>
    </div>

    <div class="bio__container">
        <h2>Carrera y Capacitaciones</h2>

        <div class="bio__container--estudios">
            <div class="estudios__container">
                <ul>
                    <li>
                        <h5>NUTRICIÓN APLICADA A LOS DEPORTES</h5>
                        <p>Francis Holway</p>
                    </li>
                    <li>
                        <h5>SUPLEMENTACIÓN DEPORTIVA Y AYUDAS ERGOGÉNICAS</h5>
                        <p>American College of Sports Medicine</p>
                    </li>
                    <li>
                        <h5>NUTRICIÓN EN FÚTBOL</h5>
                        <p>Sabrina Goddard, Romina Garavaglia</p>
                    </li>
                    <li>
                        <h5>CERTIFICACIÓN INTERNACIONAL ISAK NIVEL 2</h5>
                        <p>Daniel Prattico</p>
                    </li>
                    <li>
                        <h5>CERTIFICACIÓN INTERNACIONAL ISAK NIVEL 1</h5>
                        <p>Francis Holway</p>
                    </li>
                    <li>
                        <h5>ESTRATEGIAS PARA MODIFICAR LA COMPOSICIÓN CORPORAL</h5>
                        <p>Valeria Dwilanski, Romina Garavaglia</p>
                    </li>
                    <li>
                        <h5>SEMINARIO SOBRE NUTRICIÓN APLICADA AL FUTBOL, FUTSAL Y HOCKEY SOBRE HIERBA</h5>
                        <p>Francis Holway - American College of Sports Medicine</p>
                    </li>
                    <li>
                        <h5>SEMINARIO SOBRE NUTRICIÓN APLICADA AL TRIATLÓN</h5>
                        <p>Francis Holway - American College of Sports Medicine</p>
                    </li>
                    <li>
                        <h5> SEMINARIO SOBRE NUTRICIÓN APLICADA A LA NATACIÓN</h5>
                        <p>Francis Holway - American College of Sports Medicine</p>
                    </li>
                    <li>
                        <h5> SIMPOSIO INTERNACIONAL DE ENTRENAMIENTO Y NUTRICIÓN DEPORTIVA</h5>
                        <p>Real Madrid - Escuela Universitaria</p>
                    </li>
                    <li>
                        <h5>LICENCIATURA EN NUTRICIÓN</h5>
                        <p>Universidad de Belgrano</p>
                    </li>
                </ul>
            </div>
            <div class="estudios__container--img">
                <div class="estudios__container--start">
                    <img src="../images/deporte.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--center">
                    <img src="../images/antropometria.jpeg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--end" id="end">
                    <img src="../images/futbol.jpeg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--start">
                    <img src="../images/rugby.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--center">
                    <img src="../images/deporte1.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--end">
                    <img src="../images/hockey.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--start">
                    <img src="../images/basquet.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--center">
                    <img src="../images/ciclismo.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--end">
                    <img src="../images/tenis.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--start">
                    <img src="../images/futsal.jpeg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--center">
                    <img src="../images/natacion.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>
                <div class="estudios__container--end" >
                    <img src="../images/suple.jpg" alt="foto alimentos y deporte" id="estudios__img">
                </div>         
            </div>
        </div>
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