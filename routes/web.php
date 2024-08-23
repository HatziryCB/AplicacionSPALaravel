<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\CitaController;

Route::resource('citas', CitaController::class);
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');


