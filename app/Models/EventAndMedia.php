<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventAndMedia extends Model
{
    protected $table = 'event_and_media';

    protected $fillable = [
        'title',
        'event_date',
        'is_featured',
        'media_url',
        'featured_image',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

}
