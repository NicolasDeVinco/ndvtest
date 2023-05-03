<?php
$servername = "localhost";
$username = "root";
$password = "river14plate";
$dbname = "ndvopen";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
