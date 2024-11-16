<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionesController;

Route::post('/habitaciones', [HabitacionesController::class, 'createHabitacion'])->name('habitaciones.create');
Route::put('/habitaciones/edit', [HabitacionesController::class, 'updateHabitacion'])->name('habitaciones.update');
Route::delete('/habitaciones', [HabitacionesController::class, 'deleteHabitacion'])->name('habitaciones.delete');
Route::get('/habitaciones', [HabitacionesController::class, 'getHabitaciones'])->name('habitaciones.index');
Route::get('/habitaciones/{id}', [HabitacionesController::class, 'getHabitacionById'])->name('habitaciones.show');
Route::get('/habitaciones/tipo/{id}', [HabitacionesController::class, 'getHabitacionByTipoHabitacion'])->name('habitaciones.tipo');
Route::get('/habitaciones/{numero}/{piso}', [HabitacionesController::class, 'getHabitacionByNumeroAndPiso'])->name('habitaciones.numero_piso');
Route::get('/habitaciones/create', [HabitacionesController::class, 'viewCreateHabitacion'])->name('view.habitaciones.create');
Route::get('/habitaciones/all', [HabitacionesController::class, 'viewAllHabitaciones'])->name('view.habitaciones.all');
Route::post('/habitaciones/search', [HabitacionesController::class, 'getHabitacionByTipoHabitacion'])->name('habitaciones.search');