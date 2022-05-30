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
    return view('dashboard');
})->name('dashboard');

Route::prefix('/admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\AdminController::class,'create'])->name('carAdmin');
    Route::get('/add',[\App\Http\Controllers\AdminController::class,'AddCar'])->name('carAdminAdd');
    Route::post('/add',[\App\Http\Controllers\AdminController::class,'StoreCar'])->name('carAdminStore');
});

Route::prefix('mobil')->group(function () {
    Route::get('/',[\App\Http\Controllers\CarController::class,'create'])->name('carView');
    Route::get('/{mobil?}',[\App\Http\Controllers\CarController::class,'getcar'])->name('carOne');
    Route::post('/',[\App\Http\Controllers\CarController::class,'store'])->name('carRent');
});

Route::group(['prefix'=>'user'],function(){
    Route::get('/register',[\App\Http\Controllers\RegisterController::class,'create'])->name('regsCreate');
    Route::post('/register',[\App\Http\Controllers\RegisterController::class,'store'])->name('regsStore');

    Route::get('/login',[\App\Http\Controllers\SessionController::class,'create'])->name('sessCreate');
    Route::post('/login',[\App\Http\Controllers\SessionController::class,'store'])->name('sessStore');
    Route::get('/logout',[\App\Http\Controllers\SessionController::class,'destroy'])->name('sessDestroy');

    Route::get('/',[\App\Http\Controllers\ProfileController::class,'views'])->name('profView');
    Route::post('/',[\App\Http\Controllers\ProfileController::class,'update'])->name('profUpdate');
});
