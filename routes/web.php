<?php

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
    return view('layouts.landing');
})->name('landing');

Route::get('/login', function () {
    return view('login');
})->middleware(['auth'])->name('login');

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/beranda', function () {
    return view('layouts.beranda');
})->name('beranda');

Route::get('/ticket', function () {
    return view('layouts.ticket');
});



require __DIR__.'/auth.php';