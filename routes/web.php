<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // <--- Importas tu controlador

Route::get('/', function () {
    return view('welcome');
});

// Agregas esta línea al final para que funcione tu dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
