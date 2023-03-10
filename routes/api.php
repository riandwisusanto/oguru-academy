<?php

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

// category
Route::apiResource('category', App\Http\Controllers\Api\CategoryController::class)->only(['index', 'show']);

// course
Route::get('course/latest', "App\Http\Controllers\Api\CourseController@latest")->name('course.latest');
Route::apiResource('course', App\Http\Controllers\Api\CourseController::class)->only(['index', 'show']);

// mitra
Route::apiResource('mitra', App\Http\Controllers\Api\MitraController::class)->only(['index', 'show']);
