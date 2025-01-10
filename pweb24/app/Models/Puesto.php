<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion', 'descripcion', 'sector', 'id_usuario'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_puesto');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'id_puesto');
    }

    public function sensores()
    {
        return $this->hasMany(Sensor::class, 'id_puesto');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'almacena_producto', 'id_puesto', 'id_producto')
            ->withPivot('cantidad_disponible');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'nombre' => 'required|unique:puestos,nombre',
            'ubicacion' => 'required|string'
        ];
    }
}
