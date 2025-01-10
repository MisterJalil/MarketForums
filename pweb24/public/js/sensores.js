document.addEventListener('DOMContentLoaded', () => {
    const soloLocalCheckbox = $('#soloLocal');
    const textarea = $('#textarea');

    // Botones
    const anadir1vezButton = $('#añadir1vez');
    const anadirNvecesButton = $('#añadirNveces');
    const cargarSensoresButton = $('#cargarSensores');
    const cargarDatosSensorButton = $('#cargarDatosSensor');
    const borrarButton = $('#borrar');

    // Habilitar/Deshabilitar botones según el checkbox
    const actualizarEstadoBotones = () => {
        const isSoloLocal = soloLocalCheckbox.is(':checked');
        anadir1vezButton.prop('disabled', isSoloLocal);
        anadirNvecesButton.prop('disabled', isSoloLocal);
        cargarSensoresButton.prop('disabled', !isSoloLocal);
        cargarDatosSensorButton.prop('disabled', isSoloLocal);
    };

    // Inicializa el estado de los botones
    soloLocalCheckbox.change(actualizarEstadoBotones);
    actualizarEstadoBotones();

    // Añadir 1 vez
    anadir1vezButton.click(() => {
        const url = generateApiUrl();
        if (!url) return;

        textarea.val((index, value) => value + `${url}\n`);

        $.ajax({
            url: url,
            method: 'GET',
            success: (data) => {
                alert('Registro histórico creado correctamente.');
                textarea.val((index, value) => value + `Registro histórico creado:\n${JSON.stringify(data.data, null, 2)}\n`);
            },
            error: (xhr, status, error) => {
                console.error('Error:', error);
                alert('No se pudo crear el registro histórico');
            }
        });
    });

    // Añadir N veces
    anadirNvecesButton.click(() => {
        const repetirNveces = parseInt($('#repetirNveces').val()) || 1;
        const incrementoValor = parseFloat($('#incrementoValor').val()) || 0;
        const periodicidad = $('#periodicidad').val();

        let fecha = $('#fecha').val();
        let hora = $('#hora').val();
        let valor = parseFloat($('#valor').val());

        if (!fecha || !hora || isNaN(valor)) {
            alert('Por favor, complete todos los campos obligatorios.');
            return;
        }

        for (let i = 0; i < repetirNveces; i++) {
            const url = generateApiUrl(valor, fecha, hora);
            if (!url) continue;

            textarea.val((index, value) => value + `${url}\n`);

            $.ajax({
                url: url,
                method: 'GET',
                success: (data) => {
                    textarea.val((index, value) => value + `Registro histórico creado:\n${JSON.stringify(data.data, null, 2)}\n`);
                },
                error: (xhr, status, error) => {
                    console.error('Error:', error);
                }
            });

            const nuevaFechaHora = ajustarFechaHora(fecha, hora, periodicidad);
            fecha = nuevaFechaHora.fecha;
            hora = nuevaFechaHora.hora;
            valor += incrementoValor;
        }

        alert('Registros históricos creados correctamente.');
    });

    // Cargar Sensores
    cargarSensoresButton.click(() => {
        const sensorId = $('#sensor_id').val();
        const idPuesto = $('#id_puesto').val();

        const url = sensorId
            ? `/api/sensores/${sensorId}`
            : idPuesto
                ? `/api/sensores?id_puesto=${idPuesto}`
                : null;

        if (!url) {
            alert('Por favor, complete los campos obligatorios (Sensor ID o ID Puesto).');
            return;
        }

        $.ajax({
            url: url,
            method: 'GET',
            success: (data) => {
                textarea.val((index, value) => value + `Sensor encontrado:\n${JSON.stringify(data.data, null, 2)}\n`);
            },
            error: (xhr, status, error) => {
                console.error('Error:', error);
                alert('No se encontraron sensores.');
            }
        });
    });

    // Cargar Datos Sensor
    cargarDatosSensorButton.click(() => {
        const sensorId = $('#sensor_id').val();

        if (!sensorId) {
            alert('Por favor, complete el campo obligatorio (Sensor ID).');
            return;
        }

        const url = `/api/historicos/${sensorId}`;

        $.ajax({
            url: url,
            method: 'GET',
            success: (data) => {
                if (data.data && data.data.length > 0) {
                    textarea.val(`Datos históricos del sensor ${sensorId}:\n${JSON.stringify(data.data, null, 2)}\n`);
                } else {
                    alert('No se encontraron registros históricos para el sensor especificado.');
                }
            },
            error: (xhr, status, error) => {
                console.error('Error:', error);
                alert('No se pudieron cargar los registros históricos para el sensor especificado.');
            }
        });
    });

    // Borrar contenido del textarea
    borrarButton.click(() => {
        textarea.val('');
    });

    // Generar URL de la API
    function generateApiUrl(valor = null, fecha = null, hora = null) {
        const sensorId = $('#sensor_id').val();
        const fechaCampo = fecha || $('#fecha').val();
        const horaCampo = hora || $('#hora').val();
        const idPuesto = $('#id_puesto').val() || 1;
        const valorFinal = valor !== null ? valor : $('#valor').val();

        if (!sensorId || !fechaCampo || !horaCampo || !valorFinal) {
            alert('Por favor, complete todos los campos obligatorios.');
            return null;
        }
        return `/api/crear-historico/${idPuesto}/${sensorId}/${fechaCampo} ${horaCampo}/${valorFinal}`;
    }

    // Ajustar fecha y hora según periodicidad
    function ajustarFechaHora(fecha, hora, periodicidad) {
        const fechaHora = new Date(`${fecha}T${hora}`);
        if (periodicidad === 'minuto') {
            fechaHora.setMinutes(fechaHora.getMinutes() + 1);
        } else if (periodicidad === 'hora') {
            fechaHora.setHours(fechaHora.getHours() + 1);
        } else if (periodicidad === 'día') {
            fechaHora.setDate(fechaHora.getDate() + 1);
        }
        return {
            fecha: fechaHora.toISOString().split('T')[0],
            hora: fechaHora.toISOString().split('T')[1].slice(0, 8),
        };
    }
});
