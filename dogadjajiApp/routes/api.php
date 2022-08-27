<?php

use App\Http\Controllers\DogadjajController;
use App\Http\Controllers\MestoController;
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

 Route::get("/mesto",[MestoController::class,'index']);
 Route::get("/mesto/{id}",[MestoController::class,'show']);


 Route::get("/dogadjaji",[DogadjajController::class,'index']);
 Route::get("/dogadjaji/{id}",[DogadjajController::class,'show']);