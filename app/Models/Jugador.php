<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'jugadores';
    protected $primaryKey = 'id';
    

    // MANERA DE PASAR AL MODELO DE LA TABLA QUE VALORES QUIERE QUE SE GUARDEN EN LA DB -> FORMA MANUAL

    protected $fillable = [
        'nombre',
        'edad',
        'equipo',
        'idEquipo'
    ];
}
