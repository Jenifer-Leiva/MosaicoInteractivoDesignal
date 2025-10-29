<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&display=swap" rel="stylesheet">

    <title>Mosaico Interactivo - Diseño III</title>
    <link rel="stylesheet" href="index2.css">
    <script src="Funcionamientos.js"></script>
</head>
<body>
    <div class="background"></div>

    <header>
        <h1>UNIVERSIDAD MILITAR NUEVA GRANADA</h1>
        <h2>DISEÑO III</h2>
    </header>

    <main id="mosaico">
        <div class="circulo-centro">
            <img src="Recursos/Logo_Blanco.png" alt="Logo UMNG">
        </div>
        <?php
        include('conexion.php');
        $query = "SELECT * FROM ModuloEst";
        $resultado = $conn->query($query);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "
                <div class='modulo' data-id='{$row['id']}'>
                    <img src='Fotos/{$row['foto']}' alt='{$row['nombre']}'>
                </div>";
            }
        } else {
            echo "<p class='no-data'>No hay estudiantes registrados.</p>";
        }
        ?>
    </main>

    <!-- Modal del estudiante -->
    <div id="modal-estudiante" class="modal">
        <div class="modal-content">
            <span class="cerrar">&times;</span>
            <div class="contenido-modal">
                <video id="video-estudiante" controls></video>
                <div class="info-estudiante">
                    <img src="Recursos/LOGO_UMNG.png" alt="Logo UMNG" class="logo-umng">
                    <h2 id="nombre-estudiante"></h2>
                    <h3>INGENIERÍA EN MULTIMEDIA - DISEÑO III</h3>
                    <p id="frase-estudiante"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔸 Botones de navegación inferiores -->
    <div class="botones-inferiores">
        <button onclick="window.location.href='index2.php'">Estilo 1</button>
        <button onclick="window.location.href='index3.php'">Estilo 3</button>
    </div>

</body>
</html>