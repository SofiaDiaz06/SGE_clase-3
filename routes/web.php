<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Rutas de Perfil (creadas por Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Módulo de Productos
    Route::resource('productos', ProductController::class)->names('products');

    // Módulo de Categorías
    Route::resource('categorias', CategoryController::class)->names('categories');

    // Módulo de Clientes
    Route::resource('clientes', ClientController::class)->names('clients');

    // Módulo de Ventas
    Route::resource('ventas', SaleController::class)->names('sales');
});

require __DIR__.'/auth.php';