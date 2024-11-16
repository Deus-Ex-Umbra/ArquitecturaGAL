<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'\habitaciones.route.php';
require __DIR__.'\tipohabitaciones.route.php';
require __DIR__.'\usuarios.route.php';