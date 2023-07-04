

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cjedatabase";

// Crea la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


?>
