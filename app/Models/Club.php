<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $table = 'clubes';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'equipo',
        'liga',
        'idLiga'
    ];
}
