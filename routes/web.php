<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/crearcita', [\App\Http\Controllers\CitaController::class,  'cita'])->name('crear.cita');
