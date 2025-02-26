<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'supplier_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'Laptop Asus', 'harga' => 8000000],
            ['barang_id' => 2, 'supplier_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'Smartphone Samsung', 'harga' => 5000000],
            ['barang_id' => 3, 'supplier_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'TV LED LG', 'harga' => 6000000],
            ['barang_id' => 4, 'supplier_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'Kipas Angin Cosmos', 'harga' => 300000],
            ['barang_id' => 5, 'supplier_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'Mesin Cuci Samsung', 'harga' => 4000000],

            ['barang_id' => 6, 'supplier_id' => 2, 'kategori_id' => 2, 'barang_nama' => 'Baju Batik', 'harga' => 150000],
            ['barang_id' => 7, 'supplier_id' => 2, 'kategori_id' => 2, 'barang_nama' => 'Celana Jeans', 'harga' => 250000],
            ['barang_id' => 8, 'supplier_id' => 2, 'kategori_id' => 2, 'barang_nama' => 'Kaos Polo', 'harga' => 200000],
            ['barang_id' => 9, 'supplier_id' => 2, 'kategori_id' => 2, 'barang_nama' => 'Jaket Hoodie', 'harga' => 350000],
            ['barang_id' => 10, 'supplier_id' => 2, 'kategori_id' => 2, 'barang_nama' => 'Sepatu Sneakers', 'harga' => 400000],

            ['barang_id' => 11, 'supplier_id' => 3, 'kategori_id' => 3, 'barang_nama' => 'Biskuit Roma', 'harga' => 20000],
            ['barang_id' => 12, 'supplier_id' => 3, 'kategori_id' => 3, 'barang_nama' => 'Mie Instan Indomie', 'harga' => 3000],
            ['barang_id' => 13, 'supplier_id' => 3, 'kategori_id' => 3, 'barang_nama' => 'Kopi Kapal Api', 'harga' => 15000],
            ['barang_id' => 14, 'supplier_id' => 3, 'kategori_id' => 3, 'barang_nama' => 'Susu Dancow', 'harga' => 50000],
            ['barang_id' => 15, 'supplier_id' => 3, 'kategori_id' => 3, 'barang_nama' => 'Gula Pasir', 'harga' => 12000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
