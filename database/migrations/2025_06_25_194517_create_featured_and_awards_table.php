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
            $table->string('awarding_body')->nullable();                     // e.g., CNBC, CREDAI
            $table->year('year');                                // e.g., 2024
            $table->string('category')->nullable();              // Award type (e.g., Design)
            $table->string('featured_image')->nullable();                 // Trophy/logo
            $table->text('short_description')->nullable();       // Reason or summary
            $table->string('certificate_url')->nullable();       // Optional certificate
            $table->string('link')->nullable();                  // Source or news article
            $table->boolean('is_featured')->default(false);      // Highlight on homepage
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
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
