<?php
session_start();
require_once 'db_connect.php';

// Verificar si el formulario ha sido enviado
if (isset($_POST['submit'])) {
    // Recuperar los valores del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $contraseña = mysqli_real_escape_string($conn, $_POST['contraseña']);

    // Verificar si el correo ya está registrado en la base de datos
    $sql = "SELECT * FROM usuarios WHERE mail='$mail'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // El correo ya existe en la base de datos
        $_SESSION['message'] = "Lo siento, ya existe un usuario con este correo.";
        header("location: signup.php");
        exit;
    } else {
        // Crear la consulta SQL para insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, apellido, mail, contraseña) VALUES ('$nombre', '$apellido', '$mail', '$contraseña')";

        if (mysqli_query($conn, $sql)) {
            // Registro exitoso
            $_SESSION['message'] = "Tu cuenta ha sido creada exitosamente. Por favor, inicia sesión.";
            header("location: login.php");
            exit;
        } else {
            // Error en el registro
            $_SESSION['message'] = "Hubo un error al crear tu cuenta. Por favor, intenta de nuevo.";
        }
    }
}

mysqli_close($conn);
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
            <div class="nav__links" >
                <a class="link__item" href="../inicio.php">Inicio</a>
                <a class="link__item" href="./acerca_de_ndv.php">Acerca de NDV</a>
                <a class="link__item" href="./planes.php">Planes</a>
                <a class="link__item" href="./turnos.php">Turnos</a>
                <a class="link__item" href="./contacto.php">Contacto</a>
            </div>
        </nav>
    </header>

    <h1>Registro</h1>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>
        <br>
        <label for="mail">Correo electrónico:</label>
        <input type="email" name="mail" required>
        <br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required>
        <br>
        <input type="submit" name="submit" value="Registrarse">
    </form>





<footer class="footer__container">
    <div class="footer__container--info">
    <div class="footer__info--nav">
        <nav class="footer__nav">
            <div class="footer__nav--links" >
                <a class="footer__link--item" href="../index.html">Inicio</a>
                <a class="footer__link--item" href="./acerca_de_ndv.html">Acerca de NDV</a>
                <a class="footer__link--item" href="./planes.html">Planes</a>
                <a class="footer__link--item" href="./turnos.html">Turnos</a>
                <a class="footer__link--item" href="./contacto.html">Contacto</a>
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

