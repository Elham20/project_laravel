<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CuveController;
use App\Http\Controllers\HistoriqueController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class); 
    });
    Route::middleware(['role:manager'])->group(function () {
        Route::resource('cuves', CuveController::class); 
    });
    Route::middleware(['role:caviste'])->group(function () {
        Route::get('cuves', [CuveController::class, 'index'])->name('cuves.index');
        Route::post('cuves/{id}/mouts', [CuveController::class, 'addMout'])->name('cuves.addMout'); 
    });
    Route::get('historique', [HistoriqueController::class, 'index'])->name('historique.index');
});
require __DIR__.'/auth.php';
