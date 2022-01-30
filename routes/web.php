<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SKCKController;
use App\Http\Controllers\SKTMController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\RekapPendudukController;
use App\Http\Controllers\RekapSuratController;
use App\Http\Controllers\HomeController;
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
// Route::view('/','login');
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);



Route::get('/',[App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function(){
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::resource('kk', KkController::class);
    Route::resource('penduduk', PendudukController::class);
    Route::resource('surat', SuratController::class);
    Route::resource('rekapsurat', RekapSuratController::class);
    Route::resource('rekappenduduk', RekapPendudukController::class);
    Route::resource('pindah', PindahController::class);
    Route::resource('kelahiran', KelahiranController::class);
    Route::resource('kematian', KematianController::class);
    Route::resource('sktm', SKTMController::class);
    Route::resource('skck', SKCKController::class);
    Route::resource('home', HomeController::class);

    Route::resource('perangkat', PerangkatController::class);
    Route::resource('/surat', SuratController::class);

    Route::get('/pindah/{id}/printPindah', [PindahController::class, 'printPindah']);
    Route::get('/skck/{id}/printSKCK', [SKCKController::class, 'printSKCK']);
    Route::get('/sktm/{id}/printSKTM', [SKTMController::class, 'printSKTM']);
    Route::get('/kematian/{id}/printKematian', [KematianController::class, 'printKematian']);
    Route::get('/kelahiran/{id}/printKelahiran', [KelahiranController::class, 'printKelahiran']);
    Route::get('/surat/{id}/printsurat', [SuratController::class, 'printsurat']);

    Route::get('penduduk/{id}/add', [KKController::class, 'add']);
    Route::get('penduduk/{id}/keluarga', [KKController::class, 'keluarga']);
});






// Auth::routes();
