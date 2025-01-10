<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\Historico;
use Illuminate\Http\Request;

class SensorApiController extends Controller
{
    // --- Sensores ---
    // Obtener todos los sensores
    public function index()
    {
        $sensores = Sensor::all();
        if ($sensores->isEmpty()) {
            return response()->json(['message' => 'No se encontraron sensores.'], 404);
        }
        return response()->json(['message' => 'Sensores encontrados.', 'data' => $sensores], 200);
    }

    // Obtener un sensor específico
    public function show($id)
    {
        $sensor = Sensor::find($id);
        if ($sensor) {
            return response()->json(['message' => 'Sensor encontrado.', 'data' => $sensor], 200);
        } else {
            return response()->json(['message' => 'Sensor no encontrado.'], 404);
        }
    }

    // Actualizar un sensor específico
    public function update(Request $request, $id)
    {
        $sensor = Sensor::find($id);
        if (!$sensor) {
            return response()->json(['message' => 'Sensor no encontrado.'], 404);
        }

        $sensor->update($request->all());
        return response()->json(['message' => 'Sensor actualizado correctamente.', 'data' => $sensor], 200);
    }

    // Eliminar un sensor específico
    public function destroy($id)
    {
        $deletedRows = Sensor::destroy($id);
        if ($deletedRows > 0) {
            return response()->json(['message' => 'Sensor eliminado correctamente.'], 200);
        } else {
            return response()->json(['message' => 'Sensor no encontrado.'], 404);
        }
    }

    // Crear un sensor a partir de la URL
    public function createSensorByUrl($id, $magnitud, $ubicacion, $id_puesto)
    {
        $sensor = Sensor::create([
            'id' => $id,
            'magnitud' => $magnitud,
            'ubicacion' => $ubicacion,
            'id_puesto' => $id_puesto,
        ]);

        return response()->json(['message' => 'Sensor creado correctamente.', 'data' => $sensor], 201);
    }

    // --- Historicos ---
    public function indexHistorico()
    {
        $historicos = Historico::with(['sensor'])->get();
        if ($historicos->isEmpty()) {
            return response()->json(['message' => 'No se encontraron registros historicos.'], 404);
        }
        return response()->json(['message' => 'Registros historicos encontrados.', 'data' => $historicos], 200);
    }

    // Almacenar un nuevo registro histórico a partir de la URL
    public function createHistoricoByUrl($id_puesto, $id_sensor, $fecha_lectura, $valor)
    {
        $historico = Historico::create([
            'id_puesto' => $id_puesto,
            'id_sensor' => $id_sensor,
            'fecha_lectura' => $fecha_lectura,
            'valor' => $valor
        ]);

        return response()->json(['message' => 'Registro historico creado correctamente.', 'data' => $historico], 201);
    }

    // Obtener un registro histórico específico
    // Obtener registros históricos según el id del sensor
    public function showHistorico($id_sensor)
    {
        // Filtrar registros históricos por id_sensor
        $historicos = Historico::where('id_sensor', $id_sensor)->get();

        if ($historicos->isEmpty()) {
            return response()->json(['message' => 'No se encontraron registros históricos para el sensor especificado.'], 404);
        }

        return response()->json(['message' => 'Registros históricos encontrados.', 'data' => $historicos], 200);
    }


    // Eliminar un registro histórico específico por fecha de lectura
    public function destroyHistorico($fecha_lectura)
    {
        // Validar que el formato de la fecha sea correcto y que DateTime lo pueda procesar
        $parsedDate = \DateTime::createFromFormat('Y-m-d H:i:s', $fecha_lectura);

        if (!$parsedDate || $parsedDate->format('Y-m-d H:i:s') !== $fecha_lectura) {
            return response()->json(['error' => 'Formato de fecha invalido. Debe ser Y-m-d H:i:s'], 400);
        }

        // Realizar la eliminación de los registros que coinciden con la fecha exacta
        $deletedRows = Historico::where('fecha_lectura', $fecha_lectura)->delete();

        if ($deletedRows > 0) {
            return response()->json(['message' => "Se eliminaron {$deletedRows} registros historicos para la fecha y hora {$fecha_lectura}."], 200);
        } else {
            return response()->json(['message' => 'No se encontraron registros historicos para la fecha y hora proporcionada.'], 404);
        }
    }
}
