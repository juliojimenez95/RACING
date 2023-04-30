<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApuestaModel extends Model
{
    protected $table = 'apuestas';
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'valor_apuesta',
        'valor_ganacia',
        'users',
        'piloto_carrera',
        'created_at',
        'updated_at'
    ];
}
