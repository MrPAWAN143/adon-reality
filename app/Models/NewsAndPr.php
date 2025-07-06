<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class NewsAndPr extends Model
{
    protected $table = 'news_and_prs';
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'long_description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'featured_image',
        'author',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }

}
