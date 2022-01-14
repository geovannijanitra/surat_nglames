<?php

use App\Http\Controllers\KkController;
use App\Http\Controllers\PendudukController;
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

Route::resource('kk', KkController::class);
Route::resource('penduduk', PendudukController::class);
Route::get('penduduk/{id}/add', [KKController::class, 'add']);
Route::get('penduduk/{id}/keluarga', [KKController::class, 'keluarga']);
// Route::get('penduduk/{id}/penduduk', [KKController::class, 'penduduk']);




