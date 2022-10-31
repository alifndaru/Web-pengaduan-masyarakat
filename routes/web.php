<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SmartMonitoringController;
use App\Http\Controllers\SmartMonitoringSosmedController;
use App\Http\Controllers\TanggapanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/data-masyarakat', [MasyarakatController::class, 'index'])->name('data-masyarakat');
Route::get('/data-petugas', [PetugasController::class, 'index'])->name('data-petugas');


//pengaduan routes
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
Route::get('/detail-pengaduan/{id}', [PengaduanController::class,'show'])->name('detail-pengaduan');
Route::resource('tanggapan', 'App\Http\Controllers\TanggapanController');
// Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan');
// Route::post('/buat-tanggapan/{id}', [TanggapanController::class, 'store'])->name('store');
