<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiControllerApi;
use App\Http\Controllers\GuruControllerApi;
use App\Http\Controllers\JurusanControllerApi;
use App\Http\Controllers\JadwalPelajaranControllerApi;
use App\Http\Controllers\MataPelajaranControllerApi;
use App\Http\Controllers\SiswaControllerApi;
use App\Http\Controllers\KelasControllerApi;
use App\Http\Controllers\PendaftaranControllerApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('nilaiApi', NilaiControllerApi::class);
Route::resource('guruApi', GuruControllerApi::class);
Route::resource('jurusanApi', JurusanControllerApi::class);
Route::resource('jadwalApi', JadwalPelajaranControllerApi::class);
Route::resource('mapelApi', MataPelajaranControllerApi::class);
Route::resource('siswaApi', SiswaControllerApi::class);
Route::resource('kelasApi', KelasControllerApi::class);
Route::resource('pendaftaranApi', PendaftaranControllerApi::class);
