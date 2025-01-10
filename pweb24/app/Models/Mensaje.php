<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'cuerpo', 'id_usuario', 'fecha_publicacion'];
    public $timestamps = false;

    // Relación manual con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario'); // id_usuario en mensajes, id en usuarios
    }
}
