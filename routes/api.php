<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClienteController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{cliente}', [ClienteController::class, 'show']);
Route::put('/clientes/{cliente}', [ClienteController::class, 'update']);
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy']);
