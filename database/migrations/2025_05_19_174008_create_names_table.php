<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('names', function (Blueprint $table) {
            $table->integer('Id')->primary(); // You want to keep the manual Id, not auto-increment
            $table->string('names', 250);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('names');
    }
};
