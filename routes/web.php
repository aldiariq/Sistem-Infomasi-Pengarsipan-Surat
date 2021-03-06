<?php

use Illuminate\Support\Facades\Auth;
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
    return view('halamanutama');
})->name('halamanutama');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/suratmasuk', [App\Http\Controllers\SuratmasukController::class, 'listsuratmasuk'])->name('suratmasuk');
Route::get('/suratkeluar', [App\Http\Controllers\SuratkeluarController::class, 'listsuratkeluar'])->name('suratkeluar');