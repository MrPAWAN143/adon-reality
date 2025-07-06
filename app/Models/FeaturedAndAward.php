<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedAndAward extends Model
{
    protected $table = 'featured_and_awards';

    protected $fillable = [
        'title',
        'year',
        'by',
        'short_description',
        'is_featured',
        'featured_image',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
