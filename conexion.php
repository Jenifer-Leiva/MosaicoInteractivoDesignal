<?php
$servername = "localhost";
$username = "root";
$password = "Natachita.16"; // sin contraseña por defecto
$dbname = "mosaicointeractivo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

