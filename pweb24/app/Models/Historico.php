<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $fillable = ['id_sensor', 'id_puesto', 'fecha_lectura', 'valor'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relación muchos a uno con Sensor
    public function sensor()
    {
        return $this->belongsTo(Sensor::class, 'id_sensor');
    }

    // Relación muchos a uno con Puesto
    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'id_puesto');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'fecha_lectura' => 'required|date|before_or_equal:today',
            'valor' => 'required|numeric'
        ];
    }
}
