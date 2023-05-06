<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilotoCarreraModel extends Model
{
    protected $table = 'pilotos_carrera';
    public $timestamps = false;
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'piloto',
        'carrera',
        'moto',
        'posicion'
    ];
}
