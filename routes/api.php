<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Manual
// Route::get('liga', [LigaController::class, 'index']);
// Route::post('liga', [LigaController::class, 'store']);
// Route::get('liga/{id}', [LigaController::class, 'show']);
// Route::put('liga/{id}', [LigaController::class, 'update']);
// Route::delete('liga/{id}', [LigaController::class, 'destroy']);

// Liga
use App\Http\Controllers\Api\LigaController;
Route::resource('liga', LigaController::class)->except(['edit', 'create']);

// klub
use App\Http\Controllers\Api\klubController;
Route::resource('klub', klubController::class)->except(['edit', 'create']);

// pemain
use App\Http\Controllers\Api\PemainController;
Route::resource('pemain', PemainController::class)->except(['edit', 'create']);

// fan
use App\Http\Controllers\Api\fanController;
Route::resource('fan', fanController::class)->except(['edit', 'create']);
