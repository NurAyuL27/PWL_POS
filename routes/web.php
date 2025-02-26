<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;


Route::get('/level', [LevelController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});