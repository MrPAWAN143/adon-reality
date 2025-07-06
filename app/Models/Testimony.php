<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonies';
    protected $fillable = [
        'name',
        'role',
        'review_text',
        'photo',
        'is_active',
        'is_verified',
        'is_featured',
    ];
}
