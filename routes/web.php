<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
    //return "<h1>Este es el index</h1>";
});
Route::get('estudiantes', [EstudianteController::class,'index']);
Route::get('estudiantes/create', [EstudianteController::class,'create']);
Route::post('estudiantes', [EstudianteController::class,'store']);
Route::get('estudiantes/{id}/edit', [EstudianteController::class,'edit']);
Route::put('estudiantes/{id}', [EstudianteController::class,'update']);
Route::DELETE('estudiantes/{id}', [EstudianteController::class,'destroy']);

//Route::resource('estudiantes',EstudianteController::class);

