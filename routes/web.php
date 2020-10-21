<?php

use App\Http\Controllers\ContainerController;
use App\Http\Controllers\DaratController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LatarbelakangController;
use App\Http\Controllers\LautController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\ServiceController;
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


Route::get('darat', [DaratController::class, 'index']);
Route::get('laut', [LautController::class, 'index']);
Route::get('container', [ContainerController::class, 'index']);


Route::get('sumatera', [ServiceController::class, 'sumatera']);
Route::get('sulawesi', [ServiceController::class, 'sulawesi']);
Route::get('riau', [ServiceController::class, 'riau']);
Route::get('medan_jakarta', [ServiceController::class, 'medan_jakarta']);
Route::get('kalimantan', [ServiceController::class, 'kalimantan']);
Route::get('jawa_bali', [ServiceController::class, 'jawa_bali']);
Route::get('jakarta_bandung', [ServiceController::class, 'jakarta_bandung']);
Route::get('bandung_sumatera', [ServiceController::class, 'bandung_sumatera']);
Route::get('bandung_sulawesi', [ServiceController::class, 'bandung_sulawesi']);