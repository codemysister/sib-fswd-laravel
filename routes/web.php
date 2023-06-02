<?php

use App\Http\Controllers\AuthController;
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
Route::get('/', LandingController::class)->middleware('auth');

Route::prefix('dashboard')->middleware('auth')->group(function () {

    // Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->middleware('role:admin')->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->middleware('role:admin')->name('category.store');
    Route::get('/category/{category}', [CategoryController::class, 'edit'])->middleware('role:admin')->name('category.edit');
    Route::patch('/category/{category}', [CategoryController::class, 'update'])->middleware('role:admin')->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->middleware('role:admin')->name('category.destroy');

    // Role
    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->middleware('role:admin')->name('role.create');
    Route::post('/role', [RoleController::class, 'store'])->middleware('role:admin')->name('role.store');
    Route::get('/role/{role}', [RoleController::class, 'edit'])->middleware('role:admin')->name('role.edit');
    Route::patch('/role/{role}', [RoleController::class, 'update'])->middleware('role:admin')->name('role.update');
    Route::delete('/role/{role}', [RoleController::class, 'destroy'])->middleware('role:admin')->name('role.destroy');

    // Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/create', [SliderController::class, 'create'])->middleware('role:admin')->name('slider.create');
    Route::post('/slider', [SliderController::class, 'store'])->middleware('role:admin')->name('slider.store');
    Route::get('/slider/{slider}', [SliderController::class, 'edit'])->middleware('role:admin')->name('slider.edit');
    Route::patch('/slider/{slider}', [SliderController::class, 'update'])->middleware('role:admin')->name('slider.update');
    Route::delete('/slider/{slider}', [SliderController::class, 'destroy'])->middleware('role:admin')->name('slider.destroy');

    // Program
    Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('/program/create', [ProgramController::class, 'create'])->middleware('role:admin')->name('program.create');
    Route::post('/program', [ProgramController::class, 'store'])->middleware('role:admin')->name('program.store');
    Route::get('/program/{program}', [ProgramController::class, 'edit'])->middleware('role:admin')->name('program.edit');
    Route::patch('/program/{program}', [ProgramController::class, 'update'])->middleware('role:admin')->name('program.update');
    Route::delete('/program/{program}', [ProgramController::class, 'destroy'])->middleware('role:admin')->name('program.destroy');

    // Program
    Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('/program/create', [ProgramController::class, 'create'])->middleware('role:admin')->name('program.create');
    Route::post('/program', [ProgramController::class, 'store'])->middleware('role:admin')->name('program.store');
    Route::get('/program/{program}', [ProgramController::class, 'edit'])->middleware('role:admin')->name('program.edit');
    Route::patch('/program/{program}', [ProgramController::class, 'update'])->middleware('role:admin')->name('program.update');
    Route::delete('/program/{program}', [ProgramController::class, 'destroy'])->middleware('role:admin')->name('program.destroy');

    // User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->middleware('role:admin')->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->middleware('role:admin')->name('user.store');
    Route::get('/user/{user}', [UserController::class, 'edit'])->middleware('role:admin')->name('user.edit');
    Route::patch('/user/{user}', [UserController::class, 'update'])->middleware('role:admin')->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->middleware('role:admin')->name('user.destroy');

});

Route::get('/login', [AuthController::class, 'loginForm'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


