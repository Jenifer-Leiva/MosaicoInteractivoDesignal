<?php
include('conexion.php');

// Mostrar estudiantes
$estudiantes = $conn->query("SELECT * FROM ModuloEst");

// Mensaje
$mensaje = $_GET['mensaje'] ?? "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Graduandos - UMNG</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Administrar Graduandos</h1>
    <h2>Universidad Militar Nueva Granada</h2>

    <?php if ($mensaje != ""): ?>
    <div class="mensaje">
        <?= htmlspecialchars($mensaje) ?>
    </div>
    <script>
        setTimeout(() => document.querySelector('.mensaje').style.display = 'none', 3000);
    </script>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Frase</th>
                <th>Video</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $estudiantes->fetch_assoc()) { ?>
            <tr class="fila-estudiante">
                <form action="acciones_admin.php" method="POST" enctype="multipart/form-data">
                    <td><img src="Fotos/<?= $row['foto'] ?>" width="80"></td>
                    <td><input type="text" name="nombre" value="<?= htmlspecialchars($row['nombre']) ?>" disabled></td>
                    <td><input type="text" name="frase" value="<?= htmlspecialchars($row['frase']) ?>" disabled></td>
                    <td><input type="text" name="video" value="<?= htmlspecialchars($row['video']) ?>" disabled></td>
                    <td class="acciones">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="acciones-btn">
                            <button type="button" class="btn-azul btn-editar">✏️ Editar</button>
                            <button type="submit" name="editar" class="btn-verde btn-guardar" style="display:none;">💾 Guardar</button>
                            <button type="button" class="btn-gris btn-cancelar" style="display:none;">❌ Cancelar</button>
                            <button type="submit" name="eliminar" class="btn-rojo" onclick="return confirm('¿Eliminar este estudiante?')">🗑️ Eliminar</button>
                        </div>

                        <div class="subidas" style="display:none;">
                            <label>📷 Foto nueva:</label>
                            <input type="file" name="foto" accept="image/*">
                            <label>🎥 Video nuevo:</label>
                            <input type="file" name="video" accept="video/*">
                        </div>
                    </td>
                </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <div class="crear-container">
        <button id="btnMostrarFormulario" class="btn-amarillo">➕ Crear nuevo estudiante</button>

        <form id="formNuevo" action="acciones_admin.php" method="POST" enctype="multipart/form-data" class="nuevo-form" style="display:none;">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="frase" placeholder="Frase representativa" required>
            <input type="file" name="foto" accept="image/*" required>
            <input type="file" name="video" accept="video/*" required>
            <button type="submit" name="agregar" class="btn-verde">✅ Agregar estudiante</button>
        </form>
    </div>

    <script>
        // Activar edición en una fila
        document.querySelectorAll('.btn-editar').forEach(btn => {
            btn.addEventListener('click', () => {
                const fila = btn.closest('tr');
                fila.querySelectorAll('input[type=text]').forEach(input => input.disabled = false);
                fila.querySelector('.subidas').style.display = 'block';
                fila.querySelector('.btn-guardar').style.display = 'inline-block';
                fila.querySelector('.btn-cancelar').style.display = 'inline-block';
                btn.style.display = 'none';
            });
        });

        // Cancelar edición
        document.querySelectorAll('.btn-cancelar').forEach(btn => {
            btn.addEventListener('click', () => {
                const fila = btn.closest('tr');
                fila.querySelectorAll('input[type=text]').forEach(input => input.disabled = true);
                fila.querySelector('.subidas').style.display = 'none';
                fila.querySelector('.btn-guardar').style.display = 'none';
                fila.querySelector('.btn-editar').style.display = 'inline-block';
                btn.style.display = 'none';
            });
        });

        // Mostrar / ocultar formulario nuevo
        document.getElementById('btnMostrarFormulario').addEventListener('click', () => {
            const form = document.getElementById('formNuevo');
            form.style.display = form.style.display === 'none' ? 'flex' : 'none';
        });
    </script>
</body>
</html>
