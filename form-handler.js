const form = document.getElementById('contactForm');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita envío tradicional del formulario

    // Limpiar errores anteriores
    const errorDiv = document.getElementById('errors');
    errorDiv.innerText = '';

    // Obtener valores
    const telefono = form.telefono?.value || '';
    const regexTelefono = /^\d{3}-\d{3}-\d{4}$/;

    // Validación de teléfono
    if (!regexTelefono.test(telefono)) {
        errorDiv.innerText = 'El teléfono debe tener el formato 123-456-7890.';
        return;
    }

    // Recolectar datos del formulario
    const formData = new FormData(form);

    // Enviar con fetch
    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('response').innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
        errorDiv.innerText = 'Ocurrió un error al enviar el formulario.';
    });
});
