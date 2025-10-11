<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return "Login efetuado com sucesso";
})->name('auth');

Route::get('/edit', function () {
    return view('forms');
});

Route::get('/new', function () {
    return view('forms');
});
