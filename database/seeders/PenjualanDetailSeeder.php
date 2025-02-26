<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 15),
                    'jumlah' => rand(1, 5),
                    'harga' => rand(10000, 500000),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
