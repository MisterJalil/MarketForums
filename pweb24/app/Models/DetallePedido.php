<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detalle_pedido'; // Nombre correcto de la tabla en la base de datos

    protected $fillable = ['id_pedido', 'id_producto', 'cantidad', 'precio_unitario'];

    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }
}
