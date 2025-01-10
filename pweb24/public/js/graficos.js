document.addEventListener('DOMContentLoaded', function () {
    // Llamada AJAX a la API para obtener los datos históricos
    $.ajax({
        url: '/api/historicos', // URL de la API para obtener los registros históricos
        type: 'GET',
        success: function (response) {
            if (response.data) {
                // Filtrar los registros por tipo de magnitud
                const tempHistoricos = response.data.filter(historico => historico.sensor.magnitud.includes('C'));
                const noiseHistoricos = response.data.filter(historico => historico.sensor.magnitud.includes('dB'));

                // Gráfico de temperatura
                crearGrafico(
                    'tempChart',
                    'Temperatura (°C)',
                    tempHistoricos.map(historico => historico.fecha_lectura),
                    tempHistoricos.map(historico => parseFloat(historico.valor)),
                    tempHistoricos.map(historico => historico.id_puesto),
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 99, 132, 1)'
                );

                // Gráfico de ruido
                crearGrafico(
                    'noiseChart',
                    'Ruido (dB)',
                    noiseHistoricos.map(historico => historico.fecha_lectura),
                    noiseHistoricos.map(historico => parseFloat(historico.valor)),
                    noiseHistoricos.map(historico => historico.id_puesto),
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(54, 162, 235, 1)'
                );
            } else {
                console.error('No se encontraron datos históricos.');
            }
        },
        error: function (xhr) {
            console.error('Error al obtener los datos históricos:', xhr);
        }
    });
});

/**
 * Crear un gráfico con Chart.js
 * @param {string} idCanvas - ID del canvas para renderizar el gráfico
 * @param {string} etiqueta - Etiqueta del gráfico
 * @param {Array} etiquetas - Etiquetas del eje X
 * @param {Array} valores - Valores del eje Y
 * @param {Array} puestos - Información adicional sobre los puestos
 * @param {string} colorFondo - Color de fondo del gráfico
 * @param {string} colorBorde - Color del borde del gráfico
 */
function crearGrafico(idCanvas, etiqueta, etiquetas, valores, puestos, colorFondo, colorBorde) {
    const ctx = document.getElementById(idCanvas).getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: etiquetas,
            datasets: [{
                label: etiqueta,
                data: valores,
                backgroundColor: colorFondo,
                borderColor: colorBorde,
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            const index = context.dataIndex;
                            const puesto = puestos[index];
                            return `${context.dataset.label}: ${context.parsed.y}, Puesto: ${puesto}`;
                        }
                    }
                }
            }
        }
    });
}
