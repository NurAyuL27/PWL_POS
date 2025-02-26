<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('level_id')->on('m_level')->onDelete('cascade');
            $table->string('username', 20)->unique();
            $table->string('nama', 100);
            $table->string('password', 255);
            $table->timestamps();
        });        
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
