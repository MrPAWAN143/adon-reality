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
        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');                           // Name of the person raising the query
            $table->text('query_text');                       // The actual query content
            $table->string('email')->nullable();              // Email of the person raising the query
            $table->string('phone')->nullable();              // Phone number (if provided)
            $table->boolean('is_resolved')->default(false);   // Resolution status
            $table->string('form_type')->nullable();         // Type of form used (e.g., "contact", "feedback")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queries');
    }
};
