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
use App\Http\Controllers\RevProposalController;
use App\Http\Controllers\SemhasController;
use App\Http\Controllers\JadwalSemproController;
use App\Http\Controllers\JadwalSemhasController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NilaiSemproController;
use App\Http\Controllers\NilaiSemhasController;
use App\Http\Controllers\StatusController;
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
Route::post('/login-admin', [AuthController::class,'loginadmin']);
Route::group(['middleware' => ['auth:sanctum']], function () {

Route::resource('/regis-ta', regisTAController::class)->except(['create','edit']);
Route::post('/regis-ta/update-by-user', [regisTAController::class,'updateByUser']);
// Route::put('/regis-ta/{id}', [regisTAController::class,'update']);

#superadmin
Route::get('/get-data', [regisTAController::class,'getData']);
Route::get('/get-data/{id}', [regisTAController::class,'getDetail']);
Route::delete('/get-data/{id}', [regisTAController::class,'delete']);

Route::get('/get-dospem', [regisTAController::class,'getDospem']);
Route::get('/get-bimbingan', [regisTAController::class,'getBimbingan']);
Route::post('/update-status1/{id}', [regisTAController::class,'updateStatus1']);
Route::post('/update-status2/{id}', [regisTAController::class,'updateStatus2']);

#dosen
Route::resource('/beban-bimbingan', bebanBimbinganController::class)->except(['create','edit']);

Route::resource('/riset', RisetController::class)->except(['create','edit']);

Route::resource('/mahasiswa', MahasiswaController::class)->except(['create','edit']);
Route::get('/get-mahasiswa', [MahasiswaController::class,'getMahasiswa']);
Route::get('/get-mahasiswa/{id}', [MahasiswaController::class,'detailMahasiswa']);

Route::resource('/dosen', DosenController::class)->except(['create','edit']);
Route::get('/get-dosen', [DosenController::class,'getDosen']);
Route::get('/get-dosen/{id}', [DosenController::class,'detailDosen']);

Route::get('/manage-dosen', [DosenController::class,'ManageDosen']);
Route::get('/dosen-status/{id}', [DosenController::class,'updateStatus']);
Route::get('/dosen-hapus/{id}', [DosenController::class,'hapusStatus']);

#superadmin
Route::get('/manage-superadmin', [DosenController::class,'ManageSuperAdmin']);
Route::get('/dosen-supstatus/{id}', [DosenController::class,'updateStatusSup']);
Route::get('/dosen-suphapus/{id}', [DosenController::class,'hapusStatusSup']);
Route::post('/dosen-update-profile', [DosenController::class,'updateProfile']);

Route::resource('/relasi', RelasiController::class)->except(['create','edit']);
Route::post('/relasi-delete/{id}', [RelasiController::class,'destroy']);

Route::get('/all-nilai',  [NilaiSemproController::class,'AllNilai']);
Route::get('/all-nilai/{id}',  [NilaiSemproController::class,'DetailAll']);

#mahasiswa+admin(koorpro)
Route::resource('/sempro', SemproController::class)->except(['create','edit']);
Route::get('/get-sempro', [SemproController::class,'getData']);

Route::post('/jadwal-sempro-update', [SemproController::class,'updateJadwalSempro']);
Route::get('/coba', [SemproController::class,'coba']);

Route::get('/status', [StatusController::class,'index']);
Route::post('/status-update', [StatusController::class,'update']);

Route::resource('/rev-proposal', RevProposalController::class)->except(['create','edit']);
Route::get('/detail-proposal/{id}', [RevProposalController::class,'DetailRevisi']);


Route::resource('/semhas', SemhasController::class)->except(['create','edit']);
Route::get('/get-semhas', [SemhasController::class,'getData']);
Route::post('/jadwal-semhas-update', [SemhasController::class,'updateJadwalSemhas']);

Route::resource('/jadwal-sempro', JadwalSemproController::class)->except(['create','edit']);

Route::resource('/jadwal-semhas', JadwalSemhasController::class)->except(['create','edit']);

Route::resource('/nilai-sempro', NilaiSemproController::class)->except(['create','edit']);
Route::get('/val-sempro',  [NilaiSemproController::class,'NilaiSempro']);

// Route::get('/nilai-sempro/{id}/{dosen}', [NilaiSemproController::class,'showWithDosen']);

Route::resource('/nilai-semhas', NilaiSemhasController::class)->except(['create','edit']);



    Route::get('/me', [AuthController::class,'me']);
});


Route::get('/export-sempro',  [NilaiSemproController::class,'export']);

Route::resource('/info', InfoController::class)->except(['create','edit']);

Route::resource('/doc-sempro', DocSemproController::class)->except(['create','edit']);

Route::resource('/doc-semhas', DocSemhasController::class)->except(['create','edit']);
