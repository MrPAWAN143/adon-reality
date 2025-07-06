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
        Schema::create('leads', function (Blueprint $table) {
          $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('phone')->nullable(); // Phone number

    $table->text('comment')->nullable();
    $table->string('product')->nullable();

    $table->boolean('is_read')->default(false);
    $table->boolean('is_new')->default(true);

    $table->text('message')->nullable();  // Internal notes
    $table->string('author')->nullable(); // Who updated

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
