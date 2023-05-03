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
    <title>Planes NDV</title>
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
    
    <div class="planes__container">
        <div class="planes__container--presencial">
            <div class="presencial__container--antropometria">
                <h3>ANTROPOMETRIA <br> ISAK II</h3>
                <div class="antropometria__container">
                    <ul>
                        <li>Antropometría ISAK II</li>
                        <li>Evaluación de resultados</li>
                        <li>Comparación con mediciones previas</li>
                        <li>Definición de objetivos de composición corporal</li>
                    </ul>
                    <div class="personalizado__container--img">
                        <img src="../images/antropometria.jpeg" alt="foto medicion antropometrica" class="presencial__container--img">
                    </div>
                    <h4>$4.000.-</h4>                    
                    <div class="planes__container--submit">         
                        <a href="./turnos.html"><input type="submit" value="Sacar turno" class="submit__azul"></a>
                    </div> 
                </div>
            </div>

            <div class="presencial__container--personalizado">
                <h3>PLAN ALIMENTARIO PERSONALIZADO</h3>
                <div class="personalizado__container">
                    <ul>
                        <li>Entrevista inicial</li>
                        <li>Definición de objetivos</li>
                        <li>Antropometría opcional incluida</li>
                        <li>Armado de plan alimentario individualizado</li>
                        <li>Devolución por Zoom o presencial (sin cargo extra)</li>
                    </ul>
                    <div class="personalizado__container--img">
                        <img src="../images/deporte.jpg" alt="foto deporte y comida" class="presencial__container--img">
                    </div>
                    <h4>$7.000.-</h4> 
                    <div class="planes__container--submit">
                        <a href="./turnos.html"><input type="submit" value="Sacar turno" class="submit__azul"></a>
                    </div>
                </div>
            </div>

            <div class="presencial__container--control">
                <h3>CONTROLES</h3>
                <div class="controles__container">
                    <ul>
                        <li>Consulta de seguimiento</li>
                        <li>Chequeo de objetivos</li>
                        <li>Evaluación de resultados</li>
                        <li>Educación alimentaria</li>
                        <li>Antropometría opcional incluida</li>
                    </ul>
                    <div class="personalizado__container--img">
                        <img src="../images/control.jpg" alt="foto deporte y comida" class="presencial__container--img">
                    </div>
                    <h4>$4.000.-</h4>          
                    <div class="planes__container--submit">         
                        <a href="./turnos.html"><input type="submit" value="Sacar turno" class="submit__azul"></a>
                    </div>  
                </div>
            </div>

            
        </div>

        <div class="planes__container--virtual">
            <h5> - PLANES PREDETERMINADOS SEGÚN OBJETIVOS - </h5>

            <div class="virtual__container">
                <div class="virtual__container--aumento">
                    <h3>AUMENTO MASA MUSCULAR</h3>
                    <div class="aumento__container">
                        <ul>
                            <li>Plan basado en un superávit calórico</li>
                            <li>Distribución de macronutrientes en base a sus requerimientos deportivos</li>
                            <li>Cantidad, calidad y timing de nutrientes en base a su objetivo</li>
                            <li>Recomendaciones de marca y listado de compras</li>
                            <li>Ideas de menú</li>
                        </ul>
                        <div class="personalizado__container--img">
                            <img src="../images/musculo.jpg" alt="foto medicion antropometrica" class="presencial__container--img">
                        </div>
                        <h4>$5.000.-</h4>                       
                        <div class="planes__container--submit">
                            <a href="./turnos.html"><input type="submit" value="Sacar turno" class="submit__azul" ></a>
                        </div>
                    </div>
                </div>

                <div class="virtual__container--descenso">
                    <h3>DESCENSO MASA GRASA</h3>
                    <div class="descenso__container">
                        <ul>
                            <li>Plan basado en un déficit calórico</li>
                            <li>Distribución de macronutrientes en base a sus requerimientos deportivos</li>
                            <li>Cantidad, calidad y timing de nutrientes en base a su objetivo</li>
                            <li>Recomendaciones de marca y listado de compras</li>
                            <li>Ideas de menú</li>
                        </ul>
                        <div class="personalizado__container--img">
                            <img src="../images/grasa.jpg" alt="foto medicion antropometrica" class="presencial__container--img">
                        </div>
                        <h4>$5.000.-</h4>                       
                        <div class="planes__container--submit">
                            <a href="./turnos.html"><input type="submit" value="Sacar turno" class="submit__azul"></a>
                        </div>
                    </div>
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