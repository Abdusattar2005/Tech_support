<?php

use App\Http\Controllers\Admin\Main\IndexController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth',  'verified']], function () {
    Route::get('/', [IndexController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
