<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = ['magnitud', 'ubicacion', 'id_puesto'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function historicos()
    {
        return $this->hasMany(Historico::class, 'id_sensor');
    }
}
