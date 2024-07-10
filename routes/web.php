<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

//test port
//Route::get('/', function(){
//    return view('form.Account');
//});

//Get the page
Route::get('/', function(){
    return view('form.LoginForm');
});
Route::get('/form', function (){
    return view('form.RegisterForm');
});
Route::get('/views', function(){
    return view('form.Account');
});

//account
//Route::get('/home', [AccountController::class, 'index']) -> name('home');
Route::get('/account/{username}', [AccountController::class, 'account'])->name('account');

//Login
Route::get('login', [AccountController::class, 'showLogin']) -> name('login');
Route::post('/login', [AccountController::class, 'checkLogin']);

//register
Route::get('/register', [AccountController::class, 'showRegister']) -> name('register');
Route::post('/register', [AccountController::class, 'register']);
