<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', [LivroController::class, 'index'])->name('index');
Route::get('/create', [LivroController::class, 'create'])->name('create');
Route::post('/', [LivroController::class, 'store'])->name('store');
Route::get('/{id}/edit', [LivroController::class, 'edit'])->name('edit');
Route::put('/{id}', [LivroController::class, 'update'])->name('update');
Route::get('/{id}', [LivroController::class, 'show'])->name('show');
Route::delete('/{id}', [LivroController::class, 'destroy'])->name('destroy');
