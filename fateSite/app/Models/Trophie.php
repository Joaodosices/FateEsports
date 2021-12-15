<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trophie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'date',
        'position',
        'linktournament',
        'id_game',
    ];

}
