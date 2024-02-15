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
    return view('master');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/generateqr', [App\Http\Controllers\GenerateqrController::class, 'index'])->name('generateqr');
Route::get('/komentar', [App\Http\Controllers\komentar::class, 'index'])->name('komentar');
Route::post('/qr', [App\Http\Controllers\HomeController::class, 'index'])->name('qr');
Route::get('/bukutamu', [App\Http\Controllers\bukutamu::class, 'index'])->name('bukutamu');