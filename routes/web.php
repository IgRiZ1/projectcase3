<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/startpagina', function () {
    return view('startpagina.index');
});

Route::get('/producten', function () {
    return view('producten.index');
});
