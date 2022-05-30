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

Route::get('/administrasi', function () {
    return view('Admin.administrasi');
})->name('administrasi');

Route::get('/mobil', function () {
    return view('Admin.aturMobil');
})->name('mobil');

Route::get('/cekid', function () {
    return view('Admin.cekid');
})->name('cekid');

Route::get('/pesanan', function () {
    return view('Admin.pesanan');
})->name('pesanan');

// Route::get('/pemilik', function () {
//         return view('pemilikDash');
// })->name('pemilikDash');

Route::prefix('admin')->group(function () {
    Route::get('/',[\App\Http\Controllers\CarController::class,'create'])->name('adminCreate');
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
