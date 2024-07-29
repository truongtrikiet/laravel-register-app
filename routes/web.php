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
Route::get('/password', function(){
    return view('form.PasswordForm');
});

//account
Route::get('/home', [AccountController::class, 'index']) -> name('home');
Route::get('/account/{username}', [AccountController::class, 'account'])->name('account');
Route::post('/show', [AccountController::class, 'show']) -> name('show');

//Login
Route::get('/login', [AccountController::class, 'showLogin']) -> name('login');
Route::post('/login', [AccountController::class, 'checkLogin']);

//register
Route::get('/register', [AccountController::class, 'showRegister']) -> name('register');
Route::post('/register', [AccountController::class, 'register']);

//password
Route::get('/account/{username}', [AccountController::class, 'account']) -> name('accountShow');
Route::get('/account/{username}/password', [AccountController::class, 'showPassForm']) -> name('password.form');
Route::post('/account/password', [AccountController::class, 'changePassword']) -> name('password.change');


//block
Route::post('/block-account', [AccountController::class, 'blockAccount']) -> name('accounts.block');
