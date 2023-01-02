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
// Route::get('/masterekstra', function () {
//     return view('admin.masterekstra');
// });
Route::get('/ekstrak',[EkstraController::class, 'index'])->name('ekstrak.index');
Route::get('/pelatih', [PelatihController::class, "index"])->name('pelatih.index');
Route::get('/ekstrak/create',[EkstraController::class,"buatekstra"])->name('buat.ekstra');
Route::get('/ekstrak/make',[EkstraController::class,"makeekstra"])->name('make.ekstra');
Route::get('/pelatih/create',[PelatihController::class,"buatpelatih"])->name('buat.pelatih');
Route::get('/pelatih/make',[PelatihController::class,"makepelatih"])->name('make.pelatih');
