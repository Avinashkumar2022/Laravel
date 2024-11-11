<?php

use Illuminate\Support\Facades\Route;

Route::get('/abc', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });

Route::view("/home",'home');