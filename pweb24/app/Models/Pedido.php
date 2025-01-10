<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['estado', 'id_usuario', 'id_puesto'];

    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function detalles()
    {
        return $this->hasMany(DetallePedido::class, 'id_pedido');
    }
}
