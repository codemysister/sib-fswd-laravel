<?php

use App\Http\Controllers\ApiProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/program', [ApiProgramController::class, 'index']);
Route::post('/program', [ApiProgramController::class, 'store']);
Route::post('/program/{program}/update', [ApiProgramController::class, 'update']);
Route::delete('/program/{program}/destroy', [ApiProgramController::class, 'destroy']);
