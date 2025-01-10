<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;

    protected $fillable = ['id_factura', 'id_producto', 'cantidad', 'precio_unitario'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Validaciones
    public static function reglas()
    {
        return [
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0.01'
        ];
    }
}
