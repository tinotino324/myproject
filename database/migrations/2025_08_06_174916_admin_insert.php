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
        DB::table('users')->insert([
            'name' => 'Tinolin Jeba',
            'email' => 'tinolinjeba@gmail.com',
            'password' => Hash::make('12345678'),
            'usertype' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
