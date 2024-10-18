<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('users', [UserController::class, 'authenticate'])->name('users.authenticate');