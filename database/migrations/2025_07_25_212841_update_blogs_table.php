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
        Schema::table('blogs', function (Blueprint $table) {
            // Add new columns for SEO
            $table->longText('meta_title')->nullable()->change(); // SEO title
            $table->longText('meta_keywords')->nullable()->change(); // SEO keywords
            $table->longText('meta_description')->nullable()->change(); // SEO description
            $table->string('banner_image')->nullable()->after('featured_image'); // Banner image for the blog
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
