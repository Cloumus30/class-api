<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::name('loginPage')->get('/forbidden',function(){
    return response()->json([
        "code" => 403,
        "message" => "Forbidden",
        "data" => "need login",
    ],403);
});

Route::prefix('authentication')->group(function(){
    Route::post('/login','Authentication\Login\IndexController@authenticate');
    Route::get('/logout','Authentication\Logout\IndexController@logout')->middleware('auth:api');
});

Route::prefix('admin')->middleware(['auth','auth.admin'])->group(function(){
    Route::prefix('account')->group(function(){
        Route::prefix('guru')->group(function(){
            Route::post('/','Admin\Account\Guru\CreateController@store');
        });
    });
});

Route::prefix('guru')->middleware(['auth','auth.guru'])->group(function(){
    Route::prefix('absen')->group(function(){
        Route::post('/','Guru\Absen\CreateController@store');
        Route::get('/{kelas_uuid}','Guru\Absen\IndexController@index');
        Route::put('/{uuid}','Guru\Absen\UpdateController@update');
        Route::delete('/{uuid}','Guru\Absen\DeleteController@destroy');
    });
});
