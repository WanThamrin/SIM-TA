<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\bebanBimbinganController;
use App\Http\Controllers\DocYudisiumController;
use App\Http\Controllers\DocSemproController;
use App\Http\Controllers\DocSemhasController;
use App\Http\Controllers\RisetController;
use App\Http\Controllers\regisTAController;
use App\Http\Controllers\SemproController;
use App\Http\Controllers\SemhasController;
use App\Http\Controllers\JadwalSemproController;
use App\Http\Controllers\JadwalSemhasController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NilaiSemproController;
use App\Http\Controllers\NilaiSemhasController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class,'login']);
Route::post('/register', [AuthController::class,'admin']);
Route::group(['middleware' => ['auth:sanctum']], function () {

Route::resource('/regis-ta', regisTAController::class)->except(['create','edit']);
Route::get('/get-dospem', [regisTAController::class,'getDospem']);
Route::post('/update-status1/{id}', [regisTAController::class,'updateStatus1']);
Route::post('/update-status2/{id}', [regisTAController::class,'updateStatus2']);



Route::resource('/mahasiswa', MahasiswaController::class)->except(['create','edit']);

Route::resource('/dosen', DosenController::class)->except(['create','edit']);
Route::get('/get-dosen', [DosenController::class,'getDosen']);

Route::resource('/sempro', SemproController::class)->except(['create','edit']);

Route::resource('/semhas', SemhasController::class)->except(['create','edit']);

Route::resource('/jadwal-sempro', JadwalSemproController::class)->except(['create','edit']);

Route::resource('/jadwal-semhas', JadwalSemhasController::class)->except(['create','edit']);

Route::resource('/nilai-sempro', NilaiSemproController::class)->except(['create','edit']);

Route::resource('/nilai-semhas', NilaiSemhasController::class)->except(['create','edit']);


    Route::get('/me', [AuthController::class,'me']);
});

Route::resource('/beban-bimbingan', bebanBimbinganController::class)->except(['create','edit']);

Route::resource('/riset', RisetController::class)->except(['create','edit']);

Route::resource('/relasi', RelasiController::class)->except(['create','edit']);

Route::resource('/info', InfoController::class)->except(['create','edit']);

Route::resource('/doc-yudisium', DocYudisiumController::class)->except(['create','edit']);

Route::resource('/doc-sempro', DocSemproController::class)->except(['create','edit']);

Route::resource('/doc-semhas', DocSemhasController::class)->except(['create','edit']);
