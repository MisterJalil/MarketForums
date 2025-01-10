<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorApiController;
///////////////////////////// Rutas para los Sensores///////////////////////////////////////////////////////
// Obtener todos los sensores
Route::get('/sensores', [SensorApiController::class, 'index'])->name('sensores.index');
// Obtener un sensor específico
Route::get('/sensores/{id}', [SensorApiController::class, 'show'])->name('sensores.show');
// Eliminar un sensor específico
Route::get('/sensores/delete/{id}', [SensorApiController::class, 'destroy'])->name('sensores.destroy'); //
// Crear un sensor a través de la URL (por parámetros en la URL)
Route::get('/crear-sensor/{id}/{magnitud}/{ubicacion}/{id_puesto}', [SensorApiController::class, 'createSensorByUrl'])->name('crear.sensor');

// --- Rutas para los Registros Históricos ---

// Obtener todos los registros histórico
Route::get('/historicos', [SensorApiController::class, 'indexHistorico'])->name('historicos.index'); // Obtener todos los registros históricos
// Obtener un registro histórico específico
Route::get('/historicos/{id_sensor}', [SensorApiController::class, 'showHistorico'])->name('historicos.show');
// Eliminar un histoico específico
Route::get('/historicos/delete/{fecha_lectura}', [SensorApiController::class, 'destroyHistorico'])->name('historicos.destroy');
// Crear un historico través de la URL (por parámetros en la URL)
Route::get('/crear-historico/{id_puesto}/{id_sensor}/{fecha_lectura}/{valor}', [SensorApiController::class, 'createHistoricoByUrl'])->name('crear.historico');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
