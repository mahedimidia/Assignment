<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home.home');
});


Route::controller(HomeController::class)->group(function () {
    Route::prefix('home')->group(function () {
        Route::get('/', 'index')->name('home.index');
        Route::get('/about', 'about')->name('home.about');
        Route::get('/contact', 'contact')->name('home.contact');
        Route::get('/categories', 'categories')->name('home.categories');
        Route::get('/login','login')->name('home.login');
        Route::get('/registration','registration')->name('home.registration');
        Route::post('/user_login', 'user_login')->name('home.user_login');
    });
});
