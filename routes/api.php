<?php

use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\AuthController;
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

//Api routes for admin authentication
Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
});


//Api authenticated routes for admin
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('task',TaskController::class);
});
