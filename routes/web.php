<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/home', function () {
    return view('home');
});
