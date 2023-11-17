<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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


Route::get('/user', [EstudianteController::class, 'index']);
Route::post('/user', [EstudianteController::class, 'store']);
Route::put('/user', [EstudianteController::class, 'update']);
Route::delete('/user/{id}', [EstudianteController::class, 'destroy']);