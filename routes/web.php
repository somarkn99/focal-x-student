<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'aboutPage']);

Route::get('/student',[StudentController::class,'index']);
Route::get('/student/{name}',[StudentController::class,'show']);
Route::delete('/student/{name}',[StudentController::class,'destroy']);

Route::post('/student',[StudentController::class,'store']);
