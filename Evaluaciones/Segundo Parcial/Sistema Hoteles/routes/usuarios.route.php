<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::post('/usuarios', [UsuariosController::class, 'createUser'])->name('usuarios.create');
Route::put('/usuarios', [UsuariosController::class, 'updateUser'])->name('usuarios.update');
Route::delete('/usuarios', [UsuariosController::class, 'deleteUser'])->name('usuarios.delete');
Route::get('/usuarios', [UsuariosController::class, 'getUsers'])->name('usuarios.index');
Route::get('/usuarios/{id}', [UsuariosController::class, 'getUserById'])->name('usuarios.show');
