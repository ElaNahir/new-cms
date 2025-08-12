// Validación del lado cliente

document.getElementById('contactForm').addEventListener('submit', function (event) {
    // Prevenir el envío del formulario por defecto
    event.preventDefault();

    // Limpiar errores previos por si se genera uno nuevo, o si se corrige y todo está correcto, lo limpia y lo envía
    clearErrors();

    // Validar cada campo
    let isValid = true;

    // Validar Nombre
    const nombre = document.getElementById('nombre').value.trim();

    if (nombre === '') {
        showError('nombreError', 'El nombre es obligatorio');
    isValid = false;
    } else if (nombre.length < 2) {
        showError('nombreError', 'El nombre debe tener por lo menos 2 caracteres');
    isValid = false;
    }


    // Validar apellidos
     const apellidos = document.getElementById('apellidos').value.trim();

    if (apellidos === '') {
        showError('apellidosError', 'Los apellidos son obligatorios');
    isValid = false;
    } 

    // Validar teléfono 
    const telefono = document.getElementById('telefono').value.trim();
    const telefonoRegex = /^[0-9]{9}$/;
    if (telefono === ''){
        showError('telefonoError', 'El teléfono es obligatorio');
        isValid = false;
    } else if (!telefonoRegex.test(telefono)) {
        showError('telefonoError', 'Introduce un teléfono válido (9 dígitos)');
        isValid = false;
    }

    // Validar email
    const email = document.getElementById('email').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === ''){
        showError('emailError', 'El email es obligatorio');
        isValid = false;
    } else if (!emailRegex.test(email)){
        showError('emailError', 'Introduce un email válido');
        isValid = false;
    }


    // Validar biografía
    const bio = document.getElementById('bio').value.trim();
    if (bio === '') {
        showError('bioError', 'El mensaje es obligatorio');
        isValid = false;
    } else if (bio.length > 150){
        showError('bioError', 'El resumen debe tener como máximo 150 caracteres');
        isValid = false;
    }

    // Si todo es válido, enviar formulario
    if(isValid) {
        this.submit();
    }
});

function showError(id, message) {
    const errorElement = document.getElementById(id);
    errorElement.textContent = message;
}

function clearErrors() {
    const errors = document.querySelectorAll('.error');
    errors.forEach(error => {
        error.textContent = '';
    })
};