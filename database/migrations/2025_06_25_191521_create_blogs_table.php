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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();  
            $table->string('title');                             // Blog Title
            $table->string('slug')->unique();                    // URL Slug
            $table->text('summary')->nullable();                 // Short Summary
            $table->foreignId('category_id')->constrained('blog_categories')->onDelete('cascade');
            $table->string('featured_image')->nullable();        // Main image path
            $table->longText('content');                         // Full article content
            $table->string('meta_title')->nullable();            // SEO title
            $table->string('meta_keywords')->nullable();         // SEO keywords
            $table->text('meta_description')->nullable();        // SEO description
            $table->string('author_name')->default('Adon Reality'); // Author
            $table->boolean('is_published')->default(false);     // Publish flag
            $table->dateTime('published_at')->nullable();        // Publish date
            $table->boolean('is_active')->default(true);        // Active status
            $table->boolean('is_featured')->default(false);      // Featured on homepage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
