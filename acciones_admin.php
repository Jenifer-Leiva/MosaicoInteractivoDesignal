<?php
include('conexion.php');

// Agregar
if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $frase = $_POST['frase'];
    $foto = $_FILES['foto']['name'];
    $video = $_FILES['video']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'], "Fotos/" . $foto);
    move_uploaded_file($_FILES['video']['tmp_name'], "videos/" . $video);

    $conn->query("INSERT INTO ModuloEst (nombre, frase, foto, video)
                  VALUES ('$nombre', '$frase', '$foto', '$video')");
    header("Location: admin.php?mensaje=✅ Estudiante agregado correctamente");
    exit;
}

// Editar
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $frase = $_POST['frase'];

    $foto = $_FILES['foto']['name'];
    $video = $_FILES['video']['name'];

    if ($foto != "") {
        move_uploaded_file($_FILES['foto']['tmp_name'], "Foto/" . $foto);
    } else {
        $foto = $conn->query("SELECT foto FROM ModuloEst WHERE id=$id")->fetch_assoc()['foto'];
    }

    if ($video != "") {
        move_uploaded_file($_FILES['video']['tmp_name'], "videos/" . $video);
    } else {
        $video = $conn->query("SELECT video FROM ModuloEst WHERE id=$id")->fetch_assoc()['video'];
    }

    $conn->query("UPDATE ModuloEst SET nombre='$nombre', frase='$frase', foto='$foto', video='$video' WHERE id=$id");
    header("Location: admin.php?mensaje=✏️ Estudiante actualizado correctamente");
    exit;
}

// Eliminar
if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $conn->query("DELETE FROM ModuloEst WHERE id=$id");
    header("Location: admin.php?mensaje=🗑️ Estudiante eliminado correctamente");
    exit;
}
?>
