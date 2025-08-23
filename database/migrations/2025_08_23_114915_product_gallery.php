<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('productID')->primary();
                $table->string('names', 250);
                $table->text('description')->nullable();
                $table->text('images')->nullable();
                $table->string('image', 250);
                $table->timestamps();
            });
        }
    
        if (!Schema::hasTable('gallery')) {
            Schema::create('gallery', function (Blueprint $table) {
                $table->increments('galleryID')->primary();
                $table->string('image_original', 250);
                $table->string('desciption', 250);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('gallery');
    }
};