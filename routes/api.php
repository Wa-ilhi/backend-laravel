<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselSampleController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\UserController;

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

Route::get('/carousel', [CarouselSampleController::class, 'index']);
Route::get('/carousel/{id}', [CarouselSampleController::class, 'show']);
Route::delete('/carousel/{id}', [CarouselSampleController::class, 'destroy']);
Route::post('/carousel', [CarouselSampleController::class, 'store']);
Route::put('/carousel/{id}', [CarouselSampleController::class, 'update']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::put('/user/email/{id}', [UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}', [UserController::class, 'password'])->name('user.password');


Route::get('/message', [MessageController::class, 'index']);
Route::get('/message/{message_id}', [MessageController::class, 'show']);
Route::delete('/message/{message_id}', [MessageController::class, 'destroy']);
Route::post('/message', [MessageController::class, 'store']);
