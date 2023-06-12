<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\JadwalBelajarController;
use App\Http\Controllers\PaketJasaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LokasiController;

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

Route::get('/jadwal-belajar', [JadwalBelajarController::class, 'index']);
Route::get('/paket-jasa', [PaketJasaController::class, 'index']);
Route::get('/trainer', [TrainerController::class, 'index']);
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/lokasi', [LokasiController::class, 'index']);

