<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolModel extends Model
{
    protected $table = 'rol';
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'nombre'
    ];
}
