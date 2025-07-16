<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('author_names')) {
            Schema::create('author_names', function (Blueprint $table) {
                $table->integer('authorID')->primary();
                $table->string('names', 250);
                $table->timestamps();
            });
        }
    
        if (!Schema::hasTable('book_names')) {
            Schema::create('book_names', function (Blueprint $table) {
                $table->integer('bookID')->primary();
                $table->integer('authorID');
                $table->string('book_name', 250);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('author_names');
        Schema::dropIfExists('book_names');
    }
};