<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertiesCategory extends Model
{
    protected $table = 'properties_categories';

    protected $fillable = ['name','slug', 'description'];
}
