<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'nama_barang' => 'Laptop Asus', 'stok' => 10, 'harga_beli' => 7500000, 'harga_jual' => 8000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'nama_barang' => 'Smartphone Samsung', 'stok' => 20, 'harga_beli' => 4500000, 'harga_jual' => 5000000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'nama_barang' => 'TV LED LG', 'stok' => 5, 'harga_beli' => 5500000, 'harga_jual' => 6000000],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_kode' => 'BRG004', 'nama_barang' => 'Kipas Angin Cosmos', 'stok' => 15, 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'BRG005', 'nama_barang' => 'Mesin Cuci Samsung', 'stok' => 8, 'harga_beli' => 3500000, 'harga_jual' => 4000000],

            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG006', 'nama_barang' => 'Baju Batik', 'stok' => 30, 'harga_beli' => 120000, 'harga_jual' => 150000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'BRG007', 'nama_barang' => 'Celana Jeans', 'stok' => 25, 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'BRG008', 'nama_barang' => 'Kaos Polo', 'stok' => 40, 'harga_beli' => 170000, 'harga_jual' => 200000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'BRG009', 'nama_barang' => 'Jaket Hoodie', 'stok' => 15, 'harga_beli' => 300000, 'harga_jual' => 350000],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'BRG010', 'nama_barang' => 'Sepatu Sneakers', 'stok' => 12, 'harga_beli' => 350000, 'harga_jual' => 400000],

            ['barang_id' => 11, 'kategori_id' => 3, 'barang_kode' => 'BRG011', 'nama_barang' => 'Biskuit Roma', 'stok' => 100, 'harga_beli' => 18000, 'harga_jual' => 20000],
            ['barang_id' => 12, 'kategori_id' => 3, 'barang_kode' => 'BRG012', 'nama_barang' => 'Mie Instan Indomie', 'stok' => 200, 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BRG013', 'nama_barang' => 'Kopi Kapal Api', 'stok' => 80, 'harga_beli' => 13000, 'harga_jual' => 15000],
            ['barang_id' => 14, 'kategori_id' => 3, 'barang_kode' => 'BRG014', 'nama_barang' => 'Susu Dancow', 'stok' => 50, 'harga_beli' => 45000, 'harga_jual' => 50000],
            ['barang_id' => 15, 'kategori_id' => 3, 'barang_kode' => 'BRG015', 'nama_barang' => 'Gula Pasir', 'stok' => 90, 'harga_beli' => 10000, 'harga_jual' => 12000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
