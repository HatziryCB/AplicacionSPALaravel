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

Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/servicios/{id}', [ServicioController::class, 'show'])->name('servicios.show');
