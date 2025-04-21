<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1, // Televisi LED
                'user_id' => 1, // Admin
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 10,
            ],
            [
                'barang_id' => 2, // Pakaian Kerja
                'user_id' => 2, // Manager
                'stok_tanggal' => Carbon::now()->subDays(1),
                'stok_jumlah' => 15,
            ],
            [
                'barang_id' => 3, // Snack Coklat
                'user_id' => 3, // Staff
                'stok_tanggal' => Carbon::now()->subDays(2),
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 4, // Minuman Soda
                'user_id' => 1,
                'stok_tanggal' => Carbon::now()->subDays(3),
                'stok_jumlah' => 40,
            ],
            [
                'barang_id' => 5, // Meja Kayu Jati
                'user_id' => 2,
                'stok_tanggal' => Carbon::now()->subDays(4),
                'stok_jumlah' => 5,
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}