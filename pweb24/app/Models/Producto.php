<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'categoria', 'descripcion'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'detalle_pedido', 'id_producto', 'id_pedido')
            ->withPivot('cantidad', 'precio_unitario');
            // La tabla pivote es la que conecta Producto y Pedidos (Relacion M:N)
    }

    public function proveedores()
    {
        return $this->belongsToMany(Proveedor::class, 'stock', 'id_producto', 'id_proveedor')
            ->withPivot('cantidad');
    }

    public function facturas()
    {
        return $this->belongsToMany(Factura::class, 'determina_factura', 'id_producto', 'id_factura')
            ->withPivot('cantidad', 'precio_unitario');
    }

    public function puestos()
    {
        return $this->belongsToMany(Puesto::class, 'almacena_producto', 'id_producto', 'id_puesto')
            ->withPivot('cantidad_disponible');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'nombre' => 'required|unique:productos,nombre',
            'categoria' => 'required|string'
        ];
    }


    public function almacenaProducto()
    {
        return $this->hasOne(AlmacenaProducto::class, 'id_producto');
    }

}
