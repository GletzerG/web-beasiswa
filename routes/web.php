<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/persyaratan', [DashboardController::class, 'showPersyaratan']);
Route::get('/pendaftaran', [DashboardController::class, 'showPendaftaran'])->name('pendaftaran');
Route::get('/pendaftaran/daerah', [PendaftaranController::class, 'daerah'])->name('pendaftaran.daerah');
Route::get('/pendaftaran/akademik', [PendaftaranController::class, 'akademik'])->name('pendaftaran.akademik');
Route::get('/pendaftaran/nonakademik', [PendaftaranController::class, 'nonakademik'])->name('pendaftaran.nonakademik');
Route::get('/pendaftaran/kurangmampu', [PendaftaranController::class, 'kurangmampu'])->name('pendaftaran.kurangmampu');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/surat', [DashboardController::class, 'surat'])->name('surat');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// ✅ Route GET untuk nampilin form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// ✅ Route POST untuk proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('admin', function() {
    return '<h1>Admin Page</h1>';
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('penulis', function() {
    return '<h1>Penulis Page</h1>';
})->middleware(['auth', 'verified', 'role:penulis|admin']);

Route::get('tulisan', function() {
    return view('tulisan');
})->middleware(['auth', 'verified', 'role_or_permission:lihat-tulisan|admin']);