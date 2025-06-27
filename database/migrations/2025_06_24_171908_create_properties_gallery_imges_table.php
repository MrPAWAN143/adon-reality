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
        Schema::create('properties_gallery_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties_details')->onDelete('cascade'); // Foreign key to properties_details table
            $table->string('image_path'); // Path to the image file
            $table->string('image_caption')->nullable(); // Optional caption for the image
            $table->string('image_alt_text')->nullable(); // Optional alt text for the image
            $table->integer('sort_order')->default(0); // Sort order for the images in the gallery
            $table->string('image_type')->default('gallery'); // Type of image, e.g., 'gallery', 'thumbnail', etc. 
            $table->string('image_size')->nullable(); // Size of the image, e.g., 'small', 'medium', 'large'
            $table->boolean('is_active')->default(true); // Whether the image is active or not
            $table->boolean('is_featured')->default(false); // Whether the image is featured
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_gallery_imges');
    }
};
