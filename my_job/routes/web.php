<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/checkLogin',[LoginController::class,'login']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register_user',[RegisterController::class,'register']);
Route::get('/dashboard',[LoginController::class,'dashboard']);
