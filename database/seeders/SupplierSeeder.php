<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_nama' => 'PT Elektronik Jaya', 'alamat' => 'Jakarta', 'telepon' => '08123456789'],
            ['supplier_id' => 2, 'supplier_nama' => 'Toko Pakaian Indah', 'alamat' => 'Bandung', 'telepon' => '08129876543'],
            ['supplier_id' => 3, 'supplier_nama' => 'Grosir Makanan Nusantara', 'alamat' => 'Surabaya', 'telepon' => '08127654321'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
