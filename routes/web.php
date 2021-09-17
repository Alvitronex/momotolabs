<?php

use Illuminate\Support\Facades\Route;
//Our instance this class for call the database
use App\http\Controllers\RegisterController;
use App\http\Controllers\SessionController;




//This function is for don't do <a href=" "> here redirect all route the order way

Route::get('/', function () {
    return view('home');
})->middleware('auth');
//add route where our takes information to the person
Route::get('/signup', [RegisterController::class, 'create'])
->middleware('guest')
->name('signup.index');

//add route where we are gone to the main
Route::post('/signup', [RegisterController::class, 'store'])
->name('signup.store');

//add route where the user right sign up him 
Route::get('/signin', [SessionController::class, 'create'])
->middleware('guest')
->name('signin.index');


//add route where we are put your main of his ad.
Route::post('/signin', [SessionController::class, 'store'])
->name('signin.store');

//add where we are close your session
Route::get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')
->name('signin.destroy');
