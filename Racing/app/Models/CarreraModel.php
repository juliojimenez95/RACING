<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraModel extends Model
{
    protected $table = 'carreras';
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'pista',
        'fecha',
        'created_at',
        'updated_at'
    ];
}
