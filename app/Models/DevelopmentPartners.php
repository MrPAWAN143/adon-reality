<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentPartners extends Model
{
    protected $table = 'development_partners';


    protected $fillable = [
        'developer_name',
        'slug',
        'tags',
        'total_completed_area',
        'ongoing_projects',
        'founded_in',
        'group_owners',
        'office_address',
        'official_website',
        'operating_cities',
        'total_projects',
        'developer_description',
        'logo'
    ];

    protected $casts = [
        'operating_cities' => 'array', // Store as JSON array
    ];
}
