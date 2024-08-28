<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\CitaController;

Route::resource('citas', CitaController::class);
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');

use App\Http\Controllers\ServicioController;
Route::resource('servicios', ServicioController::class);
Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/servicios/{id}', [ServicioController::class, 'show'])->name('servicios.show');

use App\Http\Controllers\ClienteController;
Route::resource('clientes', ClienteController::class);
Route::get('/cliente/crear', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
