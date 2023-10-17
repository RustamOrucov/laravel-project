<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatogeriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;




Route::get('/',[MainController::class,'main'])->name('main');

Route::get('/about',[AboutController::class,'about'])->name('about');


Route::get('/contact',[ContactController::class,'contact'])->name('contact');


Route::get('/single-post',[SinglePostController::class,'singlepost'])->name('single-post');


Route::get('/catogeries',[CatogeriesController::class,'catogeries'])->name('catogeries');

Route::post('/user',[UserController::class,'user'])->name('user');