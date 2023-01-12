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


Route::get('/tes', function () {
    return view('admin.tes');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//route masterekstra
route::resource('/ekstrak', EkstraController::class);
Route::get('/ekstrak/{id}',[EkstraController::class,"show"]); //route show
Route::get('/ekstrak/{id}/hapus',[EkstraController::class,"hapus"] )->name('ekstrak.hapus'); //route delete


//route masterpelatih
route::resource('/pelatih', PelatihController::class);
Route::get('/pelatih/{id}/hapus',[PelatihController::class, "hapus"])->name('pelatih.hapus'); //route hapus

