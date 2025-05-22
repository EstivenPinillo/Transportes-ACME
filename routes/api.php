<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportPDFController;
use App\Http\Controllers\VehiclesDriversController;
use App\Http\Controllers\CountrieController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TypeDocumentController;

Route::get('/auth-token-active', [LoginController::class, "authTokenActive"])->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, "login"]);
Route::post('/logout', [LoginController::class, "logout"])->middleware('auth:sanctum');

Route::get('/user', [UserController::class, "index"])->middleware('auth:sanctum');
Route::get('/user/{id}', [UserController::class, "show"])->middleware('auth:sanctum');
Route::post('/user', [UserController::class, "store"])->middleware('auth:sanctum');
Route::put('/user/{id}', [UserController::class, "update"])->middleware('auth:sanctum');
Route::delete('/user/{id}', [UserController::class, "destroy"])->middleware('auth:sanctum');

Route::get('/vehicle/with-owner-driver', [VehicleController::class, "index"])->middleware('auth:sanctum');
Route::get('/profile/owner-driver', [ProfileController::class, "index"])->middleware('auth:sanctum');
Route::get('/report-company', [ReportPDFController::class, "reportPDFCompany"])->middleware('auth:sanctum');

Route::post('/vehicle/driver-owner', [VehiclesDriversController::class, "storeDriverOwnerVehicle"])->middleware('auth:sanctum');

Route::get('/countrie', [CountrieController::class, "index"])->middleware('auth:sanctum');
Route::get('/city-by-countrie/{id}', [CityController::class, "getCityByCountries"])->middleware('auth:sanctum');

Route::get('/type_document', [TypeDocumentController::class, "index"])->middleware('auth:sanctum');

