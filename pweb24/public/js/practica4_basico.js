// Función para añadir texto al textarea
function anadirTexto() {
    const texto = document.getElementById('text-1').value;
    const textarea = document.getElementById('resultado');
    textarea.value += texto + '\n';
}

// Función para validar y crear un temporizador
function validarYTemporizador() {
    const tiempo = document.getElementById('text-2').value;

    // Validar si el valor no es un número o está fuera del rango permitido
    if (isNaN(tiempo) || tiempo < 1 || tiempo > 60) {
        alert("Por favor, ingrese un número válido entre 1 y 60.");
        return; // Detener la ejecución si hay error
    }

    const texto = document.getElementById('text-1').value;
    const textarea = document.getElementById('resultado');
    let contador = 0;

    // Crear el temporizador
    const intervalo = setInterval(() => {
        textarea.value += texto + '\n';
        contador++;
        if (contador >= tiempo) {
            clearInterval(intervalo); // Detener el temporizador
        }
    }, 1000);
}

// Función para cambiar estilo dinámicamente
function cambiarEstilo() {
    const nuevoEstilo = document.getElementById('text-3').value;
    document.body.style.backgroundColor = nuevoEstilo; // Cambiar color de fondo como ejemplo.
}

// Asignar eventos a los botones
document.getElementById('boton1').addEventListener('click', anadirTexto);
document.getElementById('boton2').addEventListener('click', validarYTemporizador);
document.getElementById('boton3').addEventListener('click', cambiarEstilo);
