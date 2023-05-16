<?php

use App\Http\Controllers\AHPController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SPKController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Daftarpenjawab2Controller;
use App\Http\Controllers\DaftarpenjawabController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\Soal2Controller;

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
    return view('landingpage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('home', AuthController::class);
Route::get('/soal-1', [SPKController::class, 'soal1'])->name('spk.soal1');
Route::post('/hasil-sesi1', [SPKController::class, 'jawabanSoal1'])->name('spk.hasil1');
Route::get('/soal-verbal', [SPKController::class, 'soalverbal'])->name('spk.verbal');
Route::get('/soal-numerik', [SPKController::class, 'soalnumerik'])->name('spk.numerik');
Route::get('/hasil-sesi2', [SPKController::class, 'jawabanSoal2'])->name('spk.result');
Route::get('/hasil-sesi2/detail', [SPKController::class, 'ahp'])->name('spk.ahp');
Route::resource('daftar-soal', SoalController::class);
Route::resource('daftar-soal2', Soal2Controller::class);
Route::resource('daftar-penjawab', DaftarpenjawabController::class);
Route::resource('daftar-penjawab2', Daftarpenjawab2Controller::class);
Route::resource('user', ManageUserController::class);
Route::resource('pesan', KritikSaranController::class);
