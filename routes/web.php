<?php

use App\Http\Controllers\guruController;
use App\Http\Controllers\loginController;
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

Route::get('/', function () {
    return view('index');
});

// Guru Route
Route::get('/guru',[guruController::class, 'index'])->middleware('auth:guru');

Route::get('/login',[loginController::class, 'loginPage'])->name('loginPage');
Route::get('/login/{guard}', [loginController::class,'loginView']);
Route::get('/logout', [loginController::class,'logout']);

Route::post('/login/{guard}',[loginController::class, 'authenticate']);
