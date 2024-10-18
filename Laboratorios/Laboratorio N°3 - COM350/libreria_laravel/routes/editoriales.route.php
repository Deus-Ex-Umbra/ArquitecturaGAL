<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;

Route::post('editoriales', [EditorialController::class, 'allByRole'])->name('editoriales.index');