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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();
            $table->string('name');                           // Person giving feedback
            $table->string('photo')->nullable();              // Avatar or image
            $table->string('role')->nullable();               // e.g., "Flat Owner"
            $table->text('review_text');                      // Testimonial content
            $table->tinyInteger('rating')->nullable();        // Rating out of 5
            $table->string('video_link')->nullable();         // Link to video
            $table->string('thumbnail')->nullable();          // Custom preview if needed
            $table->boolean('is_featured')->default(false);   // Show on homepage
            $table->boolean('is_verified')->default(true);    // Verified by admin
            $table->boolean('is_active')->default(true);      // Active status
            $table->unsignedInteger('sort_order')->default(0); // For ordering
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};
