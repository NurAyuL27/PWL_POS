@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="alert alert-primary shadow-sm rounded-lg d-flex align-items-center">
            <div>
                <h4 class="mb-1">Halo, <strong>{{ Auth::user()->nama }}</strong>!</h4>
                <p class="mb-0">Selamat datang di <strong>Point of Sale</strong>.</p>
            </div>
        </div>
    </div>
    
    <!-- Tambahkan box untuk menampilkan total penjualan -->
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Nominal Transaksi Penjualan</h5>
                <p class="card-text">
                    Total penjualan yang terjadi saat ini adalah:
                    <strong>Rp. {{ number_format($totalPenjualan, 0, ',', '.') }}</strong>
                </p>
            </div>
        </div>
    </div>

</div>

@endsection
