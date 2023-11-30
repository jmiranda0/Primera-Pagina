<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsSocialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::resource('authors', AuthorController::class);
Route::resource('socials', SocialController::class);
Route::resource('classifications', ClassificationController::class);
Route::resource('posts', PostController::class);
Route::resource('posts-socials', PostsSocialController::class);
