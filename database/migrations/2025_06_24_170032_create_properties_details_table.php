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

            // Relationships
            $table->foreignId('category_id')->constrained('property_categories')->onDelete('cascade');
            $table->foreignId('development_partner_id')->constrained('development_partners')->onDelete('cascade');
            $table->foreignId('property_gallery_id')->nullable()->constrained('properties_gallery_images')->onDelete('cascade');

            // Main Info
            $table->string('property_name');
            $table->string('property_slug')->unique();
            $table->text('property_description')->nullable();
            $table->decimal('property_price', 15, 2)->nullable();
            $table->decimal('property_size', 10, 2)->nullable(); // Area in sqft or sqm

            // Location
            $table->string('property_location')->nullable();
            $table->string('property_address')->nullable();
            $table->string('property_city')->nullable();
            $table->string('property_state')->nullable();
            $table->string('property_zip_code')->nullable();
            $table->string('property_country')->nullable();

            // Details
            $table->string('property_type')->nullable(); // e.g., Flat, Villa, Office Space
            $table->string('property_status')->default('available'); // Available, Sold, Rented, etc.
            $table->string('property_featured_image')->nullable();
            $table->string('property_expected_roi')->nullable(); // e.g., "6-8% per annum"
            $table->text('property_benefits')->nullable(); // e.g., "Tax benefits, resale value"
            $table->text('property_amenities')->nullable(); // e.g., "Pool, Gym, Parking"
            $table->text('property_location_advantages')->nullable(); // e.g., "Near Metro Station"

            // Contact Info
            $table->string('property_contact_person')->nullable();
            $table->string('property_contact_email')->nullable();
            $table->string('property_contact_phone')->nullable();

            // Media
            $table->string('property_video_url')->nullable();
            $table->string('property_brochure_url')->nullable();

            // RERA
            $table->string('property_rera_number')->nullable(); // Corrected typo: rara → rera
            $table->string('property_rera_url')->nullable();

            // SEO
            $table->string('property_meta_title')->nullable();
            $table->string('property_meta_keywords')->nullable();
            $table->string('property_meta_description')->nullable();

            // Flags
            $table->boolean('is_active')->default(true);
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_sold')->default(false);

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
