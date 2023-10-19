<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselSampleController;

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
