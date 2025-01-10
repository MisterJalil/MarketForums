document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#add-to-cart-form');
    const button = form.querySelector('.btn-cart');

    // Crear el popup
    const popup = document.createElement('div');
    popup.id = 'popup-alert';
    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.padding = '20px 40px';
    popup.style.borderRadius = '12px';
    popup.style.color = '#fff';
    popup.style.fontSize = '18px';
    popup.style.fontWeight = 'bold';
    popup.style.textAlign = 'center';
    popup.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.15)';
    popup.style.zIndex = '1000';
    popup.style.display = 'none'; // Inicialmente oculto
    document.body.appendChild(popup);

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        // Desactivar botón y mostrar popup
        button.style.display = 'none';

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    popup.textContent = data.success;
                    popup.style.backgroundColor = '#28a745'; // Verde para éxito
                } else if (data.error) {
                    popup.textContent = data.error;
                    popup.style.backgroundColor = '#dc3545'; // Rojo para error
                }

                popup.style.display = 'block'; // Mostrar el popup

                setTimeout(() => {
                    popup.style.display = 'none'; // Ocultar popup después de 3 segundos
                    button.style.display = 'inline-block'; // Reactivar botón
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                popup.textContent = 'Ocurrió un error. Intenta de nuevo.';
                popup.style.backgroundColor = '#dc3545'; // Rojo para error
                popup.style.display = 'block';

                setTimeout(() => {
                    popup.style.display = 'none';
                    button.style.display = 'inline-block'; // Reactivar botón
                }, 3000);
            });
    });
});
