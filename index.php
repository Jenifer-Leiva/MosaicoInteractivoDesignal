<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosaico Interactivo - Diseño III</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="background"></div>

    <header>
        <h1>UNIVERSIDAD MILITAR NUEVA GRANADA</h1>
        <h2>DISEÑO III</h2>
    </header>

    <main id="mosaico">
        <?php
        include('db/conexion.php');
        $query = "SELECT * FROM ModuloEst";
        $resultado = $conn->query($query);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "
                <div class='modulo' data-id='{$row['id']}'>
                    <img src='img/uploads/{$row['foto']}' alt='{$row['nombre']}'>
                </div>";
            }
        } else {
            echo "<p class='no-data'>No hay estudiantes registrados.</p>";
        }
        ?>
    </main>

    <script>
    // Placeholder para el futuro (interacción al hacer click)
    document.querySelectorAll('.modulo').forEach(m => {
        m.addEventListener('click', () => {
            const nombre = m.querySelector('img').alt;
            alert(`Has seleccionado a ${nombre}`);
        });
    });
    </script>
</body>
</html>
