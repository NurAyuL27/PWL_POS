<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_nama' => 'Elektronik', 'kategori_kode' => 'ELK'],
            ['kategori_id' => 2, 'kategori_nama' => 'Pakaian', 'kategori_kode' => 'PKN'],
            ['kategori_id' => 3, 'kategori_nama' => 'Makanan', 'kategori_kode' => 'MKN'],
            ['kategori_id' => 4, 'kategori_nama' => 'Minuman', 'kategori_kode' => 'MIN'],
            ['kategori_id' => 5, 'kategori_nama' => 'Peralatan Rumah Tangga', 'kategori_kode' => 'PRT'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
