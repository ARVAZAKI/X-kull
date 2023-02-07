<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\UserController;

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
    return view('login');
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
    Route::get('/pelatih/{id}/hapus',[PelatihController::class,"hapus"] )->name('pelatih.hapus');
    Route::get('/pelatih/{id}',[PelatihController::class,"show"]);
    route::get('/akunadmin', [UserController::class, "adminindex"]);
    Route::post('/akunadmin', [UserController::class, "createadmin"])->name('admin.create');
    Route::get('/akunadmin/{id}/hapus',[UserController::class,"hapusadmin"] )->name('admin.hapus');
    route::get('/akunsiswa', [UserController::class, "siswaindex"]);
    Route::post('/akunsiswa', [UserController::class, "createsiswa"])->name('siswa.create');
    Route::get('/akunsiswa/{id}/hapus',[UserController::class,"hapussiswa"] )->name('siswa.hapus');
    route::get('/akunpelatih', [UserController::class, "pelatihindex"]);
    Route::post('/akunpelatih', [UserController::class, "createpelatih"])->name('akunpelatih.create');
    Route::get('/akunpelatih/{id}/hapus',[UserController::class,"hapuspelatih"] )->name('akunpelatih.hapus');
    // Route::get('/ekstrak/{id}/hapus',[EkstraController::class,"hapussiswa"] )->name('ekstrasiswa.hapus');
});

//route siswa
Route::group(['middleware'=>['auth','CekRole:siswa']],function(){
    route::get('/ekstrasiswa', [EkstraController::class, "ekstrasiswa"])->name('ekstra.siswa');
    route::get('/dashboardsiswa',[EkstraController::class, "showekstrasiswa"]);
});

//route pelatih
