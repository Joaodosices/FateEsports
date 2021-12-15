<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'nickname',
        'img',
        'id_game',
        'id_user',
    ];
}
