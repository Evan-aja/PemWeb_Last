<?php

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
//    return view('welcome');
    return view('dashboard');
});

Route::group(['prefix'=>'user'],function(){
    Route::get('/register',[\App\Http\Controllers\RegisterController::class,'create'])->name('regsCreate');
    Route::post('/register',[\App\Http\Controllers\RegisterController::class,'store'])->name('regsStore');

    Route::get('/login',[\App\Http\Controllers\SessionController::class,'create'])->name('sessCreate');
    Route::post('/login',[\App\Http\Controllers\SessionController::class,'store'])->name('sessStore');
    Route::get('/logout',[\App\Http\Controllers\SessionController::class,'destroy'])->name('sessDestroy');
});
