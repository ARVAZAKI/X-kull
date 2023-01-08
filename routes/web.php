<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkstraController;
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
    return view('login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//route masterekstra
Route::get('/ekstrak',[EkstraController::class, 'index'])->name('ekstrak.index'); //route index
Route::get('/ekstrak/create',[EkstraController::class,"buatekstra"])->name('buat.ekstra'); //route create
Route::get('/ekstrak/make',[EkstraController::class,"makeekstra"])->name('make.ekstra'); //route create
Route::get('/ekstrak/{id}',[EkstraController::class,"show"]); //route show
Route::get('/ekstrak/{id}/hapus',[EkstraController::class,"hapus"] )->name('ekstrak.hapus'); //route delete

//route masterpelatih
Route::get('/pelatih', [PelatihController::class, "index"])->name('pelatih.index'); //route index
Route::get('/pelatih/create',[PelatihController::class,"buatpelatih"])->name('buat.pelatih'); //route create
Route::get('/pelatih/make',[PelatihController::class,"makepelatih"])->name('make.pelatih'); //route create
Route::get('/pelatih/{id}/hapus',[PelatihController::class, "hapus"])->name('pelatih.hapus'); //route hapus
