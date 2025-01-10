<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'contraseña', 'rol'];
    protected $table = 'usuarios';
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_usuario');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required|min:8|regex:/[a-z]/|regex:/[0-9]/'
        ];
    }
}
