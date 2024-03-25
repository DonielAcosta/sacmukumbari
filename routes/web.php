<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CocinaController;
use App\Http\Middleware\AdminAuth;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register',[RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/login',[SessionController::class,'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login',[SessionController::class,'store'])->name('login.store');
Route::get('/logout',[SessionController::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin',[AdminController::class,'index'])
        ->middleware('auth.admin')
        ->name('admin.index');

Route::get('/crear', [CocinaController::class, 'create'])->name('crear');
Route::post('/guardar-registro', [CocinaController::class, 'store'])
    ->middleware('auth.admin')
    ->name('guardar_registro');

?>
