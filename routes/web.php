<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JadwalPelajaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('/siswas', SiswaController::class);
Route::resource('/jurusans', JurusanController::class);
Route::resource('/pendaftarans', PendaftaranController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/matapelajarans', MataPelajaranController::class);
Route::resource('/gurus', GuruController::class);
Route::resource('/nilais', NilaiController::class);
Route::resource('/jadwalpelajarans', JadwalPelajaranController::class);
Route::resource('/users', UserController::class);


Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
