<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will be
| assigned to the "api" middleware group. Make something great!
|
*/

// Registrasi pengguna baru (POST)
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

// Registrasi pengguna baru alternatif (POST)
Route::post('/register1', App\Http\Controllers\Api\RegisterController::class)->name('register1');

// Login pengguna (POST)
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

// Mendapatkan data pengguna yang terautentikasi (GET)
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Logout pengguna (POST)
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

// LevelController untuk menangani level pengguna
use App\Http\Controllers\Api\LevelController;
Route::get('levels', [LevelController::class, 'index']); // Menampilkan daftar level (GET)
Route::post('levels', [LevelController::class, 'store']); // Menyimpan level baru (POST)
Route::get('levels/{level}', [LevelController::class, 'show']); // Menampilkan detail level berdasarkan ID (GET)
Route::put('levels/{level}', [LevelController::class, 'update']); // Memperbarui level berdasarkan ID (PUT)
Route::delete('levels/{level}', [LevelController::class, 'destroy']); // Menghapus level berdasarkan ID (DELETE)

// UserController untuk menangani pengguna
use App\Http\Controllers\Api\UserController;
Route::get('users', [UserController::class, 'index']); // Menampilkan daftar pengguna (GET)
Route::post('users', [UserController::class, 'store']); // Menyimpan pengguna baru (POST)
Route::get('users/{user}', [UserController::class, 'show']); // Menampilkan detail pengguna berdasarkan ID (GET)
Route::put('users/{user}', [UserController::class, 'update']); // Memperbarui pengguna berdasarkan ID (PUT)
Route::delete('users/{user}', [UserController::class, 'destroy']); // Menghapus pengguna berdasarkan ID (DELETE)

// KategoriController untuk menangani kategori barang
use App\Http\Controllers\Api\KategoriController;
Route::get('kategori', [KategoriController::class, 'index']); // Menampilkan daftar kategori (GET)
Route::post('kategori', [KategoriController::class, 'store']); // Menyimpan kategori baru (POST)
Route::get('kategori/{kategori}', [KategoriController::class, 'show']); // Menampilkan detail kategori berdasarkan ID (GET)
Route::put('kategori/{kategori}', [KategoriController::class, 'update']); // Memperbarui kategori berdasarkan ID (PUT)
Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']); // Menghapus kategori berdasarkan ID (DELETE)

// BarangController untuk menangani barang
use App\Http\Controllers\Api\BarangController;
Route::get('barang', [BarangController::class, 'index']); // Menampilkan daftar barang (GET)
Route::post('barang', [BarangController::class, 'store']); // Menyimpan barang baru (POST)
Route::get('barang/{barang}', [BarangController::class, 'show']); // Menampilkan detail barang berdasarkan ID (GET)
Route::put('barang/{barang}', [BarangController::class, 'update']); // Memperbarui barang berdasarkan ID (PUT)
Route::delete('barang/{barang}', [BarangController::class, 'destroy']); // Menghapus barang berdasarkan ID (DELETE)

// SupplierController untuk menangani supplier
use App\Http\Controllers\Api\SupplierController;
Route::get('supplier', [SupplierController::class, 'index']); // Menampilkan daftar supplier (GET)
Route::post('supplier', [SupplierController::class, 'store']); // Menyimpan supplier baru (POST)
Route::get('supplier/{supplier}', [SupplierController::class, 'show']); // Menampilkan detail supplier berdasarkan ID (GET)
Route::put('supplier/{supplier}', [SupplierController::class, 'update']); // Memperbarui supplier berdasarkan ID (PUT)
Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy']); // Menghapus supplier berdasarkan ID (DELETE)

// PenjualanController untuk menangani transaksi penjualan
use App\Http\Controllers\Api\PenjualanController;
Route::post('/penjualan', [PenjualanController::class, 'store']); // Menyimpan transaksi penjualan baru (POST)
Route::get('/penjualan/{penjualan}', [PenjualanController::class, 'show']); // Menampilkan detail transaksi penjualan berdasarkan ID (GET)
