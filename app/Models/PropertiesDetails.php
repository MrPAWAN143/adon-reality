<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertiesDetails extends Model
{
    protected $table = 'properties_details';

  
   protected $fillable = [
    'category_id',
    'development_partner_id',
    'property_name',
    'property_slug',
    'property_rera_number',
    'property_rera_url',
    'google_map',
    'property_size',
    'property_type',
    'property_status',
    'property_expected_roi',
    'starting_price',
    'unit_size',
    'total_units',
    'unit_type',
    'number_of_towers',
    'structure_of_property',
    'unit_configurations',
    'total_area_of_land',
    'property_location',
    'property_city',
    'property_state',
    'property_country',
    'property_zip_code',
    'property_amenities',
    'property_location_advantages',
    'property_meta_title',
    'property_meta_keywords',
    'property_meta_description',
    'property_description',
    'property_benefits',
    'property_featured_image',
    'property_brochure_url',
    'prime_thumbnail_image',
    'explore_virtual_thumbnail_image',
    'property_banner',
];



    /*--------------------------------------------------------------
    |  Relationships
    --------------------------------------------------------------*/
    public function category()
    {
        return $this->belongsTo(PropertiesCategory::class, 'category_id');
    }

    public function developmentPartner()
    {
        return $this->belongsTo(DevelopmentPartners::class, 'development_partner_id');
    }

    // Example: one‑to‑many for gallery images
    public function galleryImages()
    {
        return $this->hasMany(PropertiesGalleryImages::class, 'property_id');
    }
}
