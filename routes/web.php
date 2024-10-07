<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\CitaController;
Route::resource('citas', CitaController::class);

use App\Http\Controllers\ServicioController;
Route::resource('servicios', ServicioController::class);

use App\Http\Controllers\ClienteController;
Route::resource('clientes', ClienteController::class);
Route::get('/clientes', function () {
    return view('cliente.list'); //NombreCarpeta.NombreArchivo
})->name('clientes.index');
