<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\fanController;
use App\Http\Controllers\Api\LigaController;
use App\Http\Controllers\Api\klubController;
use App\Http\Controllers\Api\PemainController;
use App\Http\Controllers\Api\AuthController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Manual
// Route::get('liga', [LigaController::class, 'index']);
// Route::post('liga', [LigaController::class, 'store']);
// Route::get('liga/{id}', [LigaController::class, 'show']);
// Route::put('liga/{id}', [LigaController::class, 'update']);
// Route::delete('liga/{id}', [LigaController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    // controller lainnya yang kemarin sudah dibuat simpan dibawah
   // Liga
Route::resource('liga', LigaController::class)->except(['edit', 'create']);
// klub
Route::resource('klub', klubController::class)->except(['edit', 'create']);
// pemain
Route::resource('pemain', PemainController::class)->except(['edit', 'create']);
// fan
Route::resource('fan', fanController::class)->except(['edit', 'create']);

});

// auth route
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
