<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PistaModel extends Model
{
    protected $table = 'pistas';
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'lugar',
        'ruta'
    ];
}
