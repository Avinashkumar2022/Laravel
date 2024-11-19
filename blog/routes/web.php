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
Route ::get('user', [UserController::class,'getView']);
Route ::get('about', [UserController::class,'aboutUser']);
Route ::get('user/{name}', [UserController::class,'getUserName']);

Route::view ("login",'login');
Route::view ("profile",'profile');



Route::post('login',[UserController::class,'login']);
Route::get('logout',[UserController::class,'logout']);


Route::get('/add-product', function () {
    return view('add-product');
});

Route::post('/store-product', [ProductController::class, 'store']);
Route::get('/total-price', [ProductController::class, 'totalPrice']);