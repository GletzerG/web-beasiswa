<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\PendaftaranController;




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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/persyaratan', [DashboardController::class, 'showPersyaratan']);
Route::get('/pendaftaran', [DashboardController::class, 'showPendaftaran'])->name('pendaftaran');
Route::get('/pendaftaran/daerah', [PendaftaranController::class, 'daerah'])->name('pendaftaran.daerah');
Route::get('/pendaftaran/akademik', [PendaftaranController::class, 'akademik'])->name('pendaftaran.akademik');
Route::get('/pendaftaran/nonakademik', [PendaftaranController::class, 'nonakademik'])->name('pendaftaran.nonakademik');
Route::get('/pendaftaran/kurangmampu', [PendaftaranController::class, 'kurangmampu'])->name('pendaftaran.kurangmampu');

