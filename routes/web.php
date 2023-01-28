<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihController;

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
    return view('admin.dashboard');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/login', [loginController::class, "index"])->name('login')->middleware('guest');
route::post('/login',[LoginController::class, "authenticate"])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//route admin
Route::group(['middleware' =>['auth','CekRole:admin']],function(){
    route::resource('/ekstrak', EkstraController::class);
    Route::get('/ekstrak/{id}',[EkstraController::class,"show"]);
    Route::get('/ekstrak/{id}/hapus',[EkstraController::class,"hapus"] )->name('ekstrak.hapus');
    Route::resource('/pelatih', PelatihController::class);
    Route::get('/pelatih/{id}/hapus',[PelatihController::class, "hapus"])->name('pelatih.hapus');
});

//route siswa
Route::group(['middleware'=>['auth','CekRole:siswa']],function(){
    route::get('/ekstrasiswa', [EkstraController::class, "ekstrasiswa"])->name('ekstra.siswa');
    route::get('/dashboardsiswa',[EkstraController::class, "showekstrasiswa"]);
});
