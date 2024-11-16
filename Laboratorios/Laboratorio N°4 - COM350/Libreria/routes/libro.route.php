<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/libro', [LibroController::class, 'viewInicioLibro'])->name('libro.inicio');
Route::get('/libro/crear', [LibroController::class, 'viewCreateLibro'])->name('libro.crear');
Route::post('/libro/crear', [LibroController::class, 'createLibro'])->name('libro.crear');
Route::get('/libro/editar/{id}', [LibroController::class, 'viewEditLibro'])->name('libro.editar');
Route::post('/libro/editar/{id}', [LibroController::class, 'editLibro'])->name('libro.editar');
Route::get('/libro/eliminar/{id}', [LibroController::class, 'deleteLibro'])->name('libro.eliminar');
Route::get('/libro/{id}', [LibroController::class, 'viewByIdLibro'])->name('libro.ver');
