<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties_details', function (Blueprint $table) {
            $table->id();
            // Main Info
            $table->string('property_name');
            $table->string('property_slug')->unique();
            $table->text('property_description')->nullable();
            $table->decimal('property_price', 15, 2)->nullable();
            $table->decimal('property_size', 10, 2)->nullable(); // Area in sqft

            // Location
            $table->string('property_location')->nullable();
            $table->string('property_city')->nullable();
            $table->string('property_state')->nullable();
            $table->string('property_zip_code')->nullable();
            $table->string('property_country')->nullable();

            // Property Details
            $table->string('property_status')->default('available'); // Available, Sold, Under Development
            $table->string('property_featured_image')->nullable();
            $table->string('property_expected_roi')->nullable();
            $table->text('property_benefits')->nullable(); // Who should invest
            $table->text('property_amenities')->nullable();
            $table->text('property_location_advantages')->nullable();

            // Area Breakdown
            $table->decimal('total_area_of_land', 8, 3)->nullable(); // in Acres, e.g. 6.015
            $table->integer('number_of_towers')->nullable();
            $table->string('structure_of_property')->nullable(); // G+23 Floors
            $table->integer('total_units')->nullable(); // Optional - could be null for "To be announced"
            $table->string('unit_configurations')->nullable(); // "3 BHK and 4 BHK Apartments"

            // Sector Specific Info
            $table->string('unit_type')->nullable(); // 3 BHK & 4 BHK
            $table->string('unit_size_text')->nullable(); // Starting from 2700 sq ft
            $table->decimal('starting_price', 10, 2)->nullable(); // Minimum investment price

            // Media
            $table->string('property_video_url')->nullable();
            $table->string('property_brochure_url')->nullable();

            // RERA
            $table->string('property_rera_number')->nullable();
            $table->string('property_rera_url')->nullable();

            // SEO
            $table->string('property_meta_title')->nullable();
            $table->string('property_meta_keywords')->nullable();
            $table->string('property_meta_description')->nullable();

               // Relationships
            $table->foreignId('category_id')->constrained('properties_categories')->onDelete('cascade');
            $table->foreignId('development_partner_id')->constrained('development_partners')->onDelete('cascade');
            $table->foreignId('property_gallery_id')->nullable()->constrained('properties_gallery_images')->onDelete('cascade');


            // Flags
            $table->boolean('is_active')->default(true);
            $table->boolean('is_verified')->default(true);
            $table->boolean('is_featured')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_details');
    }
};
