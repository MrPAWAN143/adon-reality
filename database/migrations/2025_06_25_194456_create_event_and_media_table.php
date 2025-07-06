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
            $table->string('featured_image')->nullable();         // Thumbnail
            $table->text('short_description')->nullable();       // Caption/teaser
            $table->boolean('is_featured')->default(false);      // Show on homepage
            $table->date('event_date')->nullable();         // Date of the event or media release
            $table->string('media_url')->nullable();             // URL for video or media file
            $table->boolean('is_active')->default(true);         // Active status
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
