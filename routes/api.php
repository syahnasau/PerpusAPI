<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/buku')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}',[BukuController::class,'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/delete',[BukuController::class,'delete']);
});
Route::prefix('/anggota')->group(function(){
    Route::get('/',[AnggotaController::class,'index']);
    Route::get('/{id}',[AnggotaController::class,'show']);
    Route::post('/create',[AnggotaController::class,'create']);
    Route::put('/update',[AnggotaController::class,'update']);
    Route::delete('/delete',[AnggotaController::class,'destroy']);
});
Route::prefix('/rak')->group(function(){
    Route::get('/',[RakController::class,'index']);
    Route::get('/{id}',[RakController::class,'show']);
    Route::post('/create',[RakController::class,'create']);
    Route::put('/update',[RakController::class,'update']);
    Route::delete('/delete',[RakController::class,'destroy']);
});
Route::prefix('/petugas')->group(function(){
    Route::get('/',[PetugasController::class,'index']);
    Route::get('/{id}',[PetugasController::class,'show']);
    Route::post('/create',[PetugasController::class,'create']);
    Route::put('{id}/update',[PetugasController::class,'update']);
    Route::delete('{id}/delete',[PetugasController::class,'destroy']);
});
Route::prefix('/peminjaman')->group(function(){
    Route::get('/',[PeminjamanController::class,'index']);
    Route::get('/{id}',[PeminjamanController::class,'show']);
    Route::post('/create',[PeminjamanController::class,'create']);
    Route::put('{id}/update',[PeminjamanController::class,'update']);
    Route::delete('{id}/delete',[PeminjamanController::class,'destroy']);
});
Route::prefix('/pengembalian')->group(function(){
    Route::get('/',[PengembalianController::class,'index']);
    Route::get('/{id}',[PengembalianController::class,'show']);
    Route::post('/create',[PengembalianController::class,'create']);
    Route::put('{id}/update',[PengembalianController::class,'update']);
    Route::delete('{id}/delete',[PengembalianController::class,'destroy']);
});


