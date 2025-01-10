<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Stock extends Pivot
{
    use HasFactory;

    protected $fillable = ['id_producto', 'id_proveedor', 'cantidad'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Validaciones
    public static function reglas()
    {
        return [
            'cantidad' => 'required|integer|min:1'
        ];
    }
}
