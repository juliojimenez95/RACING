<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoModel extends Model
{
    protected $table = 'motos';
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'modelo',
        'marca',
    ];
}
