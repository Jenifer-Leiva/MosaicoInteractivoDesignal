<?php
$servername = "localhost";
$username = "root";
$password = ""; // sin contraseña por defecto
$dbname = "masaicointeractivo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

