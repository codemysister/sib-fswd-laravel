<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', LandingController::class);

Route::prefix('dashboard')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('role', RoleController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('program', ProgramController::class);
    Route::resource('user', UserController::class);
});


