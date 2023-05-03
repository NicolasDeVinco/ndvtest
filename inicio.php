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
    <title>Nutricion Deportiva Vital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/logonegro.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header__container">
        <div class="logo__container">
        <a href="./index.html"><img src="./images/pruebalogo.png" alt="foto logo NDV" class="logo__container--img"></a>
        </div>
        <nav class="nav__container">
            <div class="nav__links" >
                <a class="link__item" href="./inicio.php">Inicio</a>
                <a class="link__item" href="./paginas/acerca_de_ndv.php">Acerca de NDV</a>
                <a class="link__item" href="./paginas/planes.php">Planes</a>
                <a class="link__item" href="./paginas/turnos.php">Turnos</a>
                <a class="link__item" href="./paginas/contacto.php">Contacto</a>
                <p>Hola, <?php echo $mail; ?><a href="logout.php"> Cerrar sesión</a></p>
               
            </div>
        </nav>
    </header>
  
    <div class="intro__container">
        <div class="intro__container--ndv">
            <div class="ndv__container--n">
                <h2>NUTRICIÓN</h2>
            </div>
            <div class="ndv__container--d">
                <h2>DEPORTIVA</h2>
            </div>
            <div class="ndv__container--v">
                <h2>VITAL</h2>
            </div>
        </div>
        <div class="intro__container--img">
            <img src="./images/picperfil.jpeg" alt="foto perfil ndv" class="intro__container--pic">
            <p>Lic. Nicolas De Vinco <br>MN: 10701</p>
           
        </div>
    </div>

    <div class="servicios__container"> 
        <h2 class="servicios__container--title">¿QUÉ HACEMOS EN <b>NDV</b>?</h2>
                
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-2" id="servicios__item">
                <div>
                    <img src="./images/antro.jpeg" alt="Foto midiendo" width="40%" class="servicios__item--img">
                    <div class ="servicios__info">
                        <h5 class="servicios__info--title">Antropometría <br>ISAK II</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-2" id="servicios__item">
                <div class="servicios__bola">
                    <img src="./images/plani.png" alt="Foto plan personalizado" width="40%" class="servicios__item--img">
                    <div class ="servicios__info">
                        <h5 class="servicios__info--title">Armado de planes alimentarios</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-2" id="servicios__item">
                <div class="servicios__bola">
                    <img src="./images/seguimiento.jpg" alt="Foto lupa seguimiento" width="40%" class="servicios__item--img">
                    <div class ="servicios__info">
                        <h5 class="servicios__info--title">Seguimiento</h5>
                    </div>
                </div>
            </div>

           <div class="col-sm-12 col-md-6 col-lg-5 col-xl-2" id="servicios__item">
                <div class="servicios__bola">
                    <img src="./images/educacion.jpeg" alt="Foto dando charla" width="40%" class="servicios__item--img">
                    <div class ="servicios__info">
                        <h5 class="servicios__info--title">Educación alimentaria</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-2" id="servicios__item">
                <div>
                    <img src="./images/objet.jpg" alt="Foto objetivo" width="40%" class="servicios__item--img">
                    <div class ="servicios__info">
                        <h5 class="servicios__info--title">Planes por objetivos</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-2" id="servicios__item">
                <div>
                    <img src="./images/suplementos.jpeg" alt="Foto tarro de suplementos" width="40%" class="servicios__item--img">
                    <div class ="servicios__info">
                        <h5 class="servicios__info--title">Suplementación personalizada</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


   

    <div class="testimonio__container">
        <div class="testimonio__container--info">
            <img src="./images/comillas.png" alt="imagen de comillas" class="comillas__img">
            <h3>Nacho</h3>
            <h5>- Club Manuel Belgrano -</h5>
            <p>Recomiendo 100% venir a nutricion deportiva vital. Nico se ocupa de crearte el mejor plan dependiendo tus gustos y  necesidades. En unos meses mi composicion fisica y mi  rendimiento cambiaron notablemente.</p>
        </div>

        <div class="testimonio__container--info">
            <img src="./images/comillas.png" alt="imagen de comillas" class="comillas__img">
            <h3>Josefina</h3>
            <h5>- Selección Uruguaya de Básquet -</h5>
            <p>Estoy muy contenta de trabajar con Nico. Es muy profesional, detallista y eso me hace confiar y seguir creyendo en su trabajo. Me siento muy cómoda y estoy segura de que trabajando con él voy a lograr los objetivos planteados.</p>
        </div>

        <div class="testimonio__container--info">
            <img src="./images/comillas.png" alt="imagen de comillas" class="comillas__img">
            <h3>Federico</h3>
            <h5>- Espartanos 360 -</h5>
            <p>Nico es un profesional de primer nivel. Se enfoca en tu objetivo, personaliza el plan a tus necesidades y te educa en cómo aplicarlo. Desde que comencé con él pude mejorar mi rendimiento, tolerar mejor la carga de entrenamiento y mejorar mi composición corporal.</p>
        </div>
    </div>

    <div class="clubes__container"> 
        <h2 class="clubes__container--title">TRABAJANDO CON DEPORTISTAS DE:</h2>
                
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/cmb.png" alt="Escudo Manuel Belgrano Rugby" class="clubes__img">
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Club Manuel Belgrano</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/uruguay.png" alt="Escudo Federacion Uruguaya de Basquet"  width="25%">
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Selección Uruguaya de Básquet</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/obras.jpg" alt="Escudo Obras basquet" class="clubes__img">                    
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Obras básquet</p>
                    </div>
                </div>
            </div>

           <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
            <div>
                <img src="./images/liceonaval.png" alt="Escudo Liceo Naval" class="clubes__img">                    
                <div class ="servicios__info">
                        <p class="servicios__info--title">Liceo Naval Hockey</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/sanmartin.png" alt="Escudo San Martin Hockey" class="clubes__img">
                    <div class ="servicios__info">
                        <p class="servicios__info--title">San Martin Hockey</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/ferro.png" alt="Escudo Ferro Handball" class="clubes__img">                    
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Ferro Handball</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/corredores.png" alt="Logo club de corredores" class="clubes__img">
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Club de Corredores</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/hebraica.png" alt="Escudo Hebraica basquet" class="clubes__img">
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Hebraica básquet</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/patronato.svg.png" alt="Escudo Patronato" class="clubes__img">                    
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Club Atlético Patronato</p>
                    </div>
                </div>
            </div>

           <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
            <div>
                <img src="./images/sanlorenzo.svg.png" alt="Escudo San Lorenzo basquet" class="clubes__img">                    
                <div class ="servicios__info">
                        <p class="servicios__info--title">San Lorenzo básquet</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/liceomilitar.png" alt="Escudo Liceo Militar" class="clubes__img">                    
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Liceo Militar Hockey</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" id="clubes__item">
                <div>
                    <img src="./images/espartano.jpg" alt="Escudo Espartano 360" class="clubes__img">                    
                    <div class ="servicios__info">
                        <p class="servicios__info--title">Espartano 360</p>
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
                    <a class="footer__link--item" href="./inicio.php">Inicio</a>
                    <a class="footer__link--item" href="./paginas/acerca_de_ndv.php">Acerca de NDV</a>
                    <a class="footer__link--item" href="./paginas/planes.php">Planes</a>
                    <a class="footer__link--item" href="./paginas/turnos.php">Turnos</a>
                    <a class="footer__link--item" href="./paginas/contacto.php">Contacto</a>
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
            <img src="./images/whats.png" alt="logo whatsapp" class="footer__icons">
            <a href="https://www.instagram.com/nutriciondeportivavital/"><img src="./images/instagram.png" alt="logo instagram" class="footer__icons"></a>
        </div>
    </div>

    <div class="footer__registro">
        <P>Derechos reservados - NDV 2023</P>
    </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>