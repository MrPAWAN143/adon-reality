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
        Schema::create('event_and_media', function (Blueprint $table) {
            $table->id();
            $table->string('title');                             // Media Title
            $table->string('slug')->unique();                    // URL-friendly slug
            $table->enum('media_type', ['image', 'video', 'pdf', 'press'])->default('image');
            $table->string('file_url');                          // Actual file or link (e.g., YouTube)
            $table->string('featured_image')->nullable();         // Thumbnail
            $table->text('short_description')->nullable();       // Caption/teaser
            $table->json('tags')->nullable();                    // Tagging (e.g., award, CSR)
            $table->date('publish_date')->nullable();            // Public launch date
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->boolean('is_featured')->default(false);      // Show on homepage
            $table->boolean('is_active')->default(true);         // Active status
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // User who created this entry
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade'); // User who last updated this entry
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_and_media');
    }
};
