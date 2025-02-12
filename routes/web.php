<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return view('index');
});

Route::get('/hai', function () {
    return view('hai');
});
