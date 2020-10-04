<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LatarbelakangController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\VisiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('home', [HomeController::class, 'index']);
Route::get('latarbelakang', [LatarbelakangController::class, 'index']);
Route::get('visi', [VisiController::class, 'index']);
Route::get('misi', [MisiController::class, 'index']);
Route::get('legalitas', [LegalitasController::class, 'index']);
