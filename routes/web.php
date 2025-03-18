<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class,'index']);

Route::group(['prefix' => 'user'], function() {
Route::get('/', [UserController::class, 'index']);              //menampilkan halaman awal
Route::get('/list', [UserController::class, 'list']);           //menampilkan data user bentuk json
Route::get('/create', [UserController::class, 'create']);       //menampilkan halaman form tambah user
Route::post('/', [UserController::class, 'store']);             //menyimpan data user baru
Route::get('/{id}', [UserController::class, 'show']);           //menmpilkan detail user
Route::get('/{id}/edit', [UserController::class, 'edit']);      //menampilkan halaman form edit
Route::put('/{id}', [UserController::class, 'update']);         //menyimpan perubahan data user
Route::delete('/{id}', [UserController::class, 'destroy']);     //menghapus data user
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});