<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
        ['supplier_alamat' => 'Jakarta', 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT Elektronik Jaya', 'telepon' => '08123456789'],
        ['supplier_alamat' => 'Bandung', 'supplier_kode' => 'SUP002', 'supplier_nama' => 'Toko Pakaian Indah', 'telepon' => '08129876543'],
        ['supplier_alamat' => 'Surabaya', 'supplier_kode' => 'SUP003', 'supplier_nama' => 'Grosir Makanan Nusantara', 'telepon' => '08127654321'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
