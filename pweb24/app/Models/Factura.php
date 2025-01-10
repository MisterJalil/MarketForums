<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = ['estado', 'fecha', 'coste_total', 'id_puesto', 'cif_proveedor'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'id_puesto');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'cif_proveedor');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'determina_factura', 'id_factura', 'id_producto')
            ->withPivot('cantidad', 'precio_unitario');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'coste_total' => 'required|numeric|min:0.01',
            'fecha' => 'required|date',
            'estado' => 'required|in:pendiente,pagado,anulado'
        ];
    }
}
