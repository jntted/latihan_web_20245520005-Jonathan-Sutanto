<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('latihan/welcome');
});

//http://127.0.0.1:8000/latihan
Route::get('/latihan', function () {
    return view('latihan/index');
});

//home page: layout.blade.php
Route::get('/home', function () {
    return view('latihan/home');
});

//layout: default.blade.php
Route::get('/master', function () {
    return view('latihan/master');
});