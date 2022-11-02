<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

//Cliente.index viene del controlador donde index es la función de inicio
Route::get('/',[ClienteController::class, 'index'])->name('Cliente.index');
Route::get('/create',[ClienteController::class, 'create'])->name('Cliente.create');
Route::post('/store',[ClienteController::class, 'store'])->name('Cliente.store');
Route::get('/edit',[ClienteController::class, 'edit'])->name('Cliente.edit');
Route::get('/show',[ClienteController::class, 'show'])->name('Cliente.show');
