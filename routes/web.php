<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkstraController;

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
Route::get('masterekstra',[EkstraController::class, 'index']);
