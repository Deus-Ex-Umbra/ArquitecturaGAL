<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

require_once __DIR__ . '/user.route.php';