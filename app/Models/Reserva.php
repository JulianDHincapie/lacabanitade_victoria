<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Para eliminar el registro, pero solamente en la vista y no en la bd
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserva extends Model
{
    use Hasfactory;
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