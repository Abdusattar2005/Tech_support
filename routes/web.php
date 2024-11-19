<?php

use App\Http\Controllers\Admin\User\CreateController;
use App\Http\Controllers\Admin\User\EditController;
use App\Http\Controllers\Admin\User\ShowController;
use App\Http\Controllers\Admin\User\StoreController;
use App\Http\Controllers\Admin\User\UpdateController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('main.index');
});

Route::group(['namespace' => 'Admin','prefix'=>'admin', 'middleware' => ['auth','admin', 'verified']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/create', [CreateController::class, 'create'])->name('admin.user.create');
        Route::post('/', [StoreController::class, 'store'])->name('admin.user.store');
        Route::get('/', [\App\Http\Controllers\Admin\User\IndexController::class, 'index'])->name('admin.user.index');
        Route::get('/{user}', [ShowController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [EditController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [UpdateController::class, 'update'])->name('admin.user.update');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
