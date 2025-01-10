document.addEventListener('DOMContentLoaded', () => {
    const dropdownToggle = document.getElementById('dropdown-toggle');
    const dropdownContent = document.getElementById('dropdown-content');

    dropdownToggle.addEventListener('click', (event) => {
        event.preventDefault(); // Previene el comportamiento por defecto del enlace
        dropdownContent.classList.toggle('show'); // Alterna la clase "show" para mostrar u ocultar el submenú
    });

    // Cierra el submenú si se hace clic fuera de él
    document.addEventListener('click', (event) => {
        if (!dropdownToggle.contains(event.target) && !dropdownContent.contains(event.target)) {
            dropdownContent.classList.remove('show');
        }
    });
});
