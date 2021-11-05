<?php

use App\Http\Controllers\PenerbanganController;
use App\Http\Controllers\LokasiController;
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
    return view('user.landing');
})->name('landing');

Route::get('/login', function () {
    return view('login');
})->middleware(['auth'])->name('login');

Route::get('/dashboard', [PenerbanganController::class, 'index'])
    ->name('dashboard');

Route::post('/cariPenerbangan', [PenerbanganController::class, 'store'])
    ->name('cariPenerbangan');

Route::get('/lokasi', [LokasiController::class, 'index'])
    ->name('lokasi');

Route::get('/penerbangan', [PenerbanganController::class, 'showData'])
    ->name('penerbangan');

Route::get('/tambahLokasi', function () {
    return view('admin.tambahLokasi');
})->name('tambahLokasi');

Route::get('/saveLokasi', [LokasiController::class, 'tambahLokasi'])
    ->name('saveLokasi');

Route::get('/ticket', function () {
    return view('user.ticket');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('adminDashboard');

Route::get('/user', function () {
    return view('admin.user');
})->name('user');

Route::group(['middleware' => ['auth']], function () {
});
require __DIR__ . '/auth.php';
