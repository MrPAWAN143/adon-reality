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
        Schema::create('development_partners', function (Blueprint $table) {
            $table->id();
            $table->string('developer_name', 150); // Full company or developer name
            $table->string('slug', 150)->unique(); // URL-friendly slug for the developer
            $table->string('email', 100)->unique(); // Official contact email
            $table->string('phone_number', 20)->nullable(); // Optional phone number
            $table->string('office_address', 255)->nullable(); // Physical office address
            $table->text('company_description')->nullable(); // Background, vision, etc.
            $table->string('logo', 255)->nullable(); // URL to logo image
            $table->string('official_website', 255)->nullable(); // Company website
            $table->year('founded_in')->nullable(); // Year established
            $table->string('total_completed_area', 100)->nullable(); // e.g., "32 million sq m"
            $table->text('ongoing_projects')->nullable(); // Flexible field for descriptions
            $table->text('group_owners')->nullable(); // Key people: founders, chairman, etc.
            $table->json('operating_cities')->nullable(); // Cities as JSON array
            $table->unsignedInteger('total_projects')->default(0); // Total projects completed/listed
            $table->json('tags')->nullable(); // Labels like "Luxury", "Green Homes"
            $table->json('social_media_links')->nullable(); // e.g., {"facebook": "...", "linkedin": "..."}
            $table->string('gstin', 30)->nullable(); // GST or registration number
            $table->boolean('is_active')->default(true); // Shown on frontend or not
            $table->boolean('is_verified')->default(false); // Verified by admin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_partners');
    }
};
