<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Video\VideooController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('main.index');
});

Route::group(['namespace' => 'Video', 'prefix' => 'videos'], function () {
    Route::get('/', [VideooController::class, 'video'])->name('main.video');
    Route::get('/{video}', [VideooController::class, 'show'])->name('main.show');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth',  'verified']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}', [UserController::class, 'delete'])->name('admin.user.delete');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });
    Route::group(['namespace' =>'Video' , 'prefix' => 'videos'], function () {
        Route::get('/create', [VideoController::class, 'create'])->name('admin.video.create');
        Route::post('/', [VideoController::class, 'store'])->name('admin.video.store');
        Route::get('/', [VideoController::class, 'index'])->name('admin.video.index');
        Route::get('/{video}', [VideoController::class, 'show'])->name('admin.video.show');
        Route::get('/{video}/edit', [VideoController::class, 'edit'])->name('admin.video.edit');
        Route::patch('/{video}', [VideoController::class, 'update'])->name('admin.video.update');
        Route::delete('/{video}', [VideoController::class, 'delete'])->name('admin.video.delete');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
