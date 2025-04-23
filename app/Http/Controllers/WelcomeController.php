<?php

namespace App\Http\Controllers;
use App\Models\BarangModel;
use App\Models\PenjualanDetailModel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Menghitung total transaksi penjualan
        $totalPenjualan = PenjualanDetailModel::join('t_penjualan', 't_penjualan.penjualan_id', '=', 't_penjualan_detail.penjualan_id')
            ->sum(\DB::raw('t_penjualan_detail.harga * t_penjualan_detail.jumlah'));  // Total nominal transaksi

        //$barangStok = BarangModel::where('t_stok', '>', 0)->get();

        $breadcrumb = (object) [
            'title' => 'Dashboard',
            'list'  => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('welcome', [
            'breadcrumb' => $breadcrumb, 
            'activeMenu' => $activeMenu,
            'totalPenjualan' => $totalPenjualan,  // Kirim data total penjualan ke view
            //'barangStok' => $barangStok, // kirim ke view
        ]);
    }


}
