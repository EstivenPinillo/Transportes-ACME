<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post('/tokens', function (Request $request) {
    
    return json_encode(["Malron", "Estiven", "Pinillo"]);
    
})->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, "login"]);

Route::post('/logout', [LoginController::class, "logout"])->middleware('auth:sanctum');

Route::get('/user', [UserController::class, "index"])->middleware('auth:sanctum');
Route::get('/user/{id}', [UserController::class, "show"])->middleware('auth:sanctum');
Route::post('/user', [UserController::class, "store"])->middleware('auth:sanctum');
Route::put('/user/{id}', [UserController::class, "update"])->middleware('auth:sanctum');
Route::delete('/user/{id}', [UserController::class, "destroy"])->middleware('auth:sanctum');
