<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//esto es un end point
Route::get('/bookis',[BookController::class,'index']);
Route::post('/bookis',[BookController::class,'store']);
Route::get('/bookis/{id}',[BookController::class,'show']);
Route::put('/bookis/{id}',[BookController::class,'update']);
Route::delete('/bookis/{id}',[BookController::class,'destroy']);
