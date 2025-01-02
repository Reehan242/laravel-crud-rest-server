<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts',[PostController::class,'index'])->name('api.index');
Route::get('/posts/{id}',[PostController::class,'show']);
Route::post('/posts',[PostController::class, 'store']);
Route::put('/posts/{id}',[PostController::class,'update']);
Route::delete('/posts/{id}',[PostController::class, 'delete']);
