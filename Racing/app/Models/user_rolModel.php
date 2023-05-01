<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_rolModel extends Model
{
    protected $table = 'user_rol';
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'users',
        'rol'
    ];
}
