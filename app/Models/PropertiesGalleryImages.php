<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertiesGalleryImages extends Model
{
    /** @var string */
    protected $table = 'properties_gallery_images';

    /**
     *  Columns you allow for mass‑assignment
     */
    protected $fillable = [
        'property_id',
        'image_path',
        'image_caption',
        'is_featured',
    ];

    /**
     *  Define the relationship with PropertiesDetails
     */
    public function property()
    {
        return $this->belongsTo(PropertiesDetails::class, 'property_id');
    }
}
