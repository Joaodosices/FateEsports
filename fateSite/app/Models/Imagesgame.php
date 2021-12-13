<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagesgame extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'img',
        'id_game',
    ];
}
