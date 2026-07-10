<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParcelleController;

Route::redirect('/', '/parcelles');

// ou bien:
// Route::get('/', [ParcelleController::class, 'index']);

Route::get('/parcelles', [ParcelleController::class, 'index'])->name('parcelles.index');
Route::get('/parcelles/create', [ParcelleController::class, 'create'])->name('parcelles.create');
Route::post('/parcelles', [ParcelleController::class, 'store'])->name('parcelles.store');
Route::get('/parcelles/{id}', [ParcelleController::class, 'show'])->name('parcelles.show');
Route::get('/parcelles/{id}/edit', [ParcelleController::class, 'edit'])->name('parcelles.edit');
Route::put('/parcelles/{id}', [ParcelleController::class, 'update'])->name('parcelles.update');
Route::delete('/parcelles/{id}', [ParcelleController::class, 'destroy'])->name('parcelles.destroy');