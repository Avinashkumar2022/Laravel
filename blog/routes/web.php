<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

// Route::view("/home",'home');

Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about',['name'=>$name]);
});

// Route::redirect('/home','/');   //Redirection

Route ::get('user', [UserController::class,'getUser']);
Route ::get('about', [UserController::class,'aboutUser']);