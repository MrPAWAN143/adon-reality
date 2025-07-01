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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            
            $table->string('full_name');                     // e.g., Rajiv Singh
            $table->string('position')->nullable();          // e.g., Chairman, Sales Head
            $table->string('photo')->nullable();             // Path to image
            $table->text('short_bio')->nullable();           // 2–3 line summary.
            $table->unsignedInteger('display_order')->default(0); // For sorting team members
            $table->boolean('is_featured')->default(false);  // Highlight key members
            $table->boolean('is_active')->default(true);     // Active status for frontend display
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
