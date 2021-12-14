<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'description',
        'facebook',
        'instagram',
        'twitter',
        'id_user_admins',
    ];
}
