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

            // ─── Main Info ─────────────────────────────────────────────
            $table->string('property_name');
            $table->string('property_slug')->unique();
            $table->text('property_description')->nullable();
            $table->string('property_price')->nullable();
            $table->string('property_size')->nullable();     // sqft
            $table->string('property_type')->default('Featured');

            // ─── Location ──────────────────────────────────────────────
            $table->string('property_location')->nullable();
            $table->string('property_city')->nullable();
            $table->string('property_state')->nullable();
            $table->string('property_zip_code')->nullable();
            $table->string('property_country')->nullable();

            // ─── Property Details ─────────────────────────────────────
            $table->string('property_status')->default('available');
            $table->string('property_featured_image')->nullable();
            $table->string('property_expected_roi')->nullable();
            $table->text('property_benefits')->nullable();
            $table->json('property_amenities')->nullable();
            $table->json('property_location_advantages')->nullable();
            $table->string('prime_thumbnail_image')->nullable();
            $table->string('explore_virtual_thumbnail_image')->nullable();


            // ─── Area Breakdown ───────────────────────────────────────
            $table->string('total_area_of_land')->nullable();   // acres
            $table->string('number_of_towers')->nullable();
            $table->string('structure_of_property')->nullable();      // e.g. G+23
            $table->string('total_units')->nullable();
            $table->string('unit_configurations')->nullable();        // “3 BHK…”

            // ─── Sector Specific Info ─────────────────────────────────
            $table->string('unit_type')->nullable();
            $table->string('unit_size')->nullable();             // “Starting from…”
            $table->string('starting_price')->nullable();

            // ─── Media ────────────────────────────────────────────────
            $table->string('property_banner')->nullable();
            $table->string('property_video_url')->nullable();
            $table->string('property_brochure_url')->nullable();

            // ─── RERA ─────────────────────────────────────────────────
            $table->string('property_rera_number')->nullable();
            $table->string('property_rera_url')->nullable();

            // ─── SEO ──────────────────────────────────────────────────
            $table->string('property_meta_title')->nullable();
            $table->string('property_meta_keywords')->nullable();
            $table->string('property_meta_description')->nullable();

            // ─── Relationships (single declaration each) ──────────────
            $table->foreignId('category_id')
                ->constrained('properties_categories')
                ->cascadeOnDelete();

            $table->foreignId('development_partner_id')
                ->constrained('development_partners')
                ->cascadeOnDelete();

            // ─── Flags ────────────────────────────────────────────────
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
