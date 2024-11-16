<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoHabitacionesController;

Route::post('/tipo_habitaciones', [TipoHabitacionesController::class, 'createTipoHabitacion'])->name('tipo_habitaciones.create');
Route::put('/tipo_habitaciones', [TipoHabitacionesController::class, 'updateTipoHabitacion'])->name('tipo_habitaciones.update');
Route::delete('/tipo_habitaciones', [TipoHabitacionesController::class, 'deleteTipoHabitacion'])->name('tipo_habitaciones.delete');
Route::get('/tipo_habitaciones', [TipoHabitacionesController::class, 'getTipoHabitaciones'])->name('tipo_habitaciones.index');
Route::get('/tipo_habitaciones/{id}', [TipoHabitacionesController::class, 'getTipoHabitacionById'])->name('tipo_habitaciones.show');
