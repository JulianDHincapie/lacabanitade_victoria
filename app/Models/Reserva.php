<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Para eliminar el registro, pero solamente en la vista y no en la bd
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'cedula', 
        'nombre', 
        'apellido',
        'telefono',
        'fecha_entrada',
        'fecha_salida'
    ];
}
?>