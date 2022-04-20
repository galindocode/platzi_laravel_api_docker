<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostController;
use App\Http\Controllers\Api\V2\PostController as PostControllerV2;

Route::apiResource('v1/posts', PostController::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts', PostControllerV2::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class , 
    'login'
]);