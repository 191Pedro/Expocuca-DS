<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pages/edit', function () {
    return view('forms');
});

Route::get('/pages/new', function () {
    return view('forms');
});
