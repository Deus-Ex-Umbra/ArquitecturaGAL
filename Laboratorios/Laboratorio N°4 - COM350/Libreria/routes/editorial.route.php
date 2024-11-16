<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;

Route::get('/editorial', [EditorialController::class, 'viewInicioEditorial'])->name('editorial.inicio');
Route::get('/editorial/crear', [EditorialController::class, 'viewCreateEditorial'])->name('editorial.crear');
Route::post('/editorial/crear', [EditorialController::class, 'createEditorial'])->name('editorial.crear');
Route::get('/editorial/editar/{id}', [EditorialController::class, 'viewEditEditorial'])->name('editorial.editar');
Route::post('/editorial/editar/{id}', [EditorialController::class, 'editEditorial'])->name('editorial.editar');
Route::get('/editorial/eliminar/{id}', [EditorialController::class, 'deleteEditorial'])->name('editorial.eliminar');
Route::get('/editorial/{id}', [EditorialController::class, 'viewByIdEditorial'])->name('editorial.ver');
Route::get('/editorial/{id}/libros', [EditorialController::class, 'getLibrosByEditorialId'])->name('editorial.libros');