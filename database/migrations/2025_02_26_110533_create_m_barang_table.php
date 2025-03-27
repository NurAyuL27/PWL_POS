<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->string('barang_kode', 10)->unique();
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori')->onDelete('cascade');
            $table->string('nama_barang', 100);
            $table->integer('stok')->default(0);
            $table->decimal('harga_beli', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->timestamps();
        });        
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
