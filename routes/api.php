<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/user/invite', [UserController::class, 'inviteUser']);
Route::get('/magic-link/user', [UserController::class, 'getUserByToken']);
