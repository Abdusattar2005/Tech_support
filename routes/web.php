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

    Route::resource('user', UserController::class)->names([
        'index' => 'admin.user.index',
        'create' => 'admin.user.create',
        'store' => 'admin.user.store',
        'show' => 'admin.user.show',
        'edit' => 'admin.user.edit',
        'update' => 'admin.user.update',
        'destroy' => 'admin.user.destroy',
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
