<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

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