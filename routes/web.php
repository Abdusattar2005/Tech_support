<?php

use App\Http\Controllers\Admin\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'prefix'=>'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('main.index');
    });
});
