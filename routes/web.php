<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

 route::get('/', function() {
     return redirect()->route('login');
 });

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login/proses',[AuthController::class,'loginProses'])->name('login.proses');  
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register/proses',[AuthController::class,'registerProses'])->name('register.proses');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');     
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/create',[UserController::class,'store'])->name('user.store');
