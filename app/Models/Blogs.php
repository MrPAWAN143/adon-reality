<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'summary',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'featured_image',
        'banner_image', // New field for banner image
        'user_id', // Assuming this is the author ID
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
