<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

Route::get('/',[ChirpController::class,'index']);


Route::middleware('auth')->group(function(){
    Route::prefix('chirps')->group(function(){
        Route::post('/',[ChirpController::class,'store'])->name('chirps.store');
        Route::get('/{chirp}',[ChirpController::class,'edit'])->name('chirps.edit');
        Route::put('/{chirp}',[ChirpController::class,'update'])->name('chirps.update');
        Route::delete('/{chirp}',[ChirpController::class,'destroy'])->name('chirps.destroy');
    });
});


// Login routes

Route::view('/login','auth.login')
    ->middleware('guest')
    ->name('login');

Route::post('/login',Login::class)
    ->middleware('guest');

Route::post('/logout', \App\Http\Controllers\Auth\logout::class)
    ->middleware('auth')
    ->name('logout');

// Register routes

Route::view('/register','auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register',Register::class)
    ->middleware('guest')
    ->name('register.post');
