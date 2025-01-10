<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['sector', 'contacto'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'stock', 'id_proveedor', 'id_producto')
            ->withPivot('cantidad');
    }

    public function facturas()
    {
        return $this->belongsToMany(Factura::class, 'proveedor_factura', 'id_proveedor', 'id_factura');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'contacto' => 'required|regex:/^[0-9]{9,15}$/'
        ];
    }
}
