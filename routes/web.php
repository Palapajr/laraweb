<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {

    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::resource('sliders', SliderController::class)->middleware('auth');
    // Route::get('slider', [SliderController::class, 'slider'])->name('index');
    Route::resource('/slider', SliderController::class);
});

