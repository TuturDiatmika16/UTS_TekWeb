<?php

use App\Http\Controllers\PenerbanganController;
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



Route::get('/ticket', function () {
    return view('user.ticket');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('adminDashboard');

Route::get('/user', function () {
    return view('admin.user');
})->name('user');

Route::get('/penerbangan', function () {
    return view('admin.penerbangan');
})->name('penerbangan');

Route::group(['middleware' => ['auth']], function () {
});
require __DIR__ . '/auth.php';
