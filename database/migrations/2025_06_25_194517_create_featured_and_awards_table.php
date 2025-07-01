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
        Schema::create('featured_and_awards', function (Blueprint $table) {
            $table->id();
            $table->string('title');                             // Award title
            $table->string('slug')->unique();                    // URL-friendly slug
            $table->enum('award_type', ['award', 'recognition', 'certification']) // Type of recognition
                ->default('award');                             // Default to 'award'
            $table->string('by')->nullable();                     // e.g., CNBC, CREDAI
            $table->year('year');                                // e.g., 2024
            $table->string('featured_image')->nullable();                 // Trophy/logo
            $table->text('short_description')->nullable();       // Reason or summary
            $table->boolean('is_featured')->default(false);      // Highlight on homepage
            $table->boolean('is_active')->default(true);         // Active status for frontend display
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_and_awards');
    }
};
