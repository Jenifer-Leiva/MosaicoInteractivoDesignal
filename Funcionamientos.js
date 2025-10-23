document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal-estudiante');
    const cerrarBtn = document.querySelector('.cerrar');

    // Detectar clics en los módulos
    document.querySelectorAll('.modulo').forEach(modulo => {
        modulo.addEventListener('click', () => {
            const id = modulo.getAttribute('data-id');

            // Solicitud AJAX para traer los datos del estudiante
            fetch(`obtener_estudiante.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('nombre-estudiante').textContent = data.nombre;
                    document.getElementById('frase-estudiante').textContent = data.frase;
                    document.getElementById('video-estudiante').src = `videos/${data.video}`;
                    modal.style.display = 'flex';
                })
                .catch(error => console.error('Error al cargar datos:', error));
        });
    });

    // Cerrar modal
    cerrarBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        document.getElementById('video-estudiante').pause();
    });

    // Cerrar al hacer clic fuera del contenido
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.getElementById('video-estudiante').pause();
        }
    });
});
