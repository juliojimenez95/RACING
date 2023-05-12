<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecargaModel extends Model
{
    protected $table = 'recargas';
    //public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id',
        'saldo',
        'estado',
        'created_at',
    ];
}
