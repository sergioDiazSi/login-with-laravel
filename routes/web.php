<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class,'index'])->name('login');
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/create-user',[RegisterController::class,'register'])->name('create_user');
Route::post('/auth',[LoginController::class,'authentication'])->name('auth');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::middleware(['auth'])->group(function (){
    Route::get('/home', [HomeController::class,'index'])->name('home');
});



