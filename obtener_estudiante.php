<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM ModuloEst WHERE id = $id";
    $resultado = $conn->query($query);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'No se encontró el estudiante.']);
    }
}
?>