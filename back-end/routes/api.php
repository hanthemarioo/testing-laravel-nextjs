<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostController::class);
Route::apiResource('categories', CategoryController::class);
Route::get('tes', function() {
    return response()->json(['namaku' => 'andra']);
});
