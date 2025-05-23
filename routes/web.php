<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Personal\Comment\CommentController;
use App\Http\Controllers\Personal\Dislike\DislikeController;
use App\Http\Controllers\Personal\Like\LikeController;
use App\Http\Controllers\Personal\PersonalController;
use App\Http\Controllers\Statica\StaticController;
use App\Http\Controllers\Video\Comment\StoreController;
use App\Http\Controllers\Video\VideooController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [VideooController::class, 'video'])->name('main.video');
});

Route::group(['namespace' => 'Video', 'prefix' => 'videos'], function () {
    Route::get('/{video}', [VideooController::class, 'show'])->name('main.show');

    Route::group(['namespace' => 'Comment', 'prefix' => '{video}/comments'], function () {
        Route::post('/', [StoreController::class, 'store'])->name('video.comment.store');

    });

    Route::group(['namespace' => 'Dislike', 'prefix' => '{video}/dislikes'], function () {
        Route::post('/', [\App\Http\Controllers\Video\Dislike\StoreController::class, 'store'])->name('video.dislike.store');
    });

    Route::group(['namespace' => 'Like', 'prefix' => '{video}/likes'], function () {
        Route::post('/', [\App\Http\Controllers\Video\Like\StoreController::class, 'store'])->name('video.like.store');
    });
});

Route::group(['namespace' => 'Menu', 'prefix' => 'menu'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('main.index');
});

Route::group(['namespace' => 'Static', 'prefix' => 'static'], function () {
    Route::get('/', [StaticController::class, 'index'])->name('static.index');
    Route::get('/{video}', [StaticController::class, 'show'])->name('static.show');
});


Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
    Route::get('/', [\App\Http\Controllers\Category\IndexController::class, 'index'])->name('category.index');

    Route::group(['namespace' => 'Post', 'prefix' => '{category}/posts'], function () {
        Route::get('/', [\App\Http\Controllers\Category\Post\IndexController::class, 'index'])->name('category.main.index');
    });
});

Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [PersonalController::class, 'index'])->name('personal.main.index');

    Route::group(['namespace' => 'Like', 'prefix' => 'like'], function () {
        Route::get('/', [LikeController::class, 'index'])->name('personal.liked.index');
        Route::delete('/{personal}', [LikeController::class, 'delete'])->name('personal.liked.delete');
    });

    Route::group(['namespace' => 'Dislike', 'prefix' => 'dislike'], function () {
        Route::get('/', [DislikeController::class, 'index'])->name('personal.dislike.index');
        Route::delete('/{personal}', [DislikeController::class, 'delete'])->name('personal.dislike.delete');
    });

    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::get('/', [CommentController::class, 'index'])->name('personal.comment.index');
        Route::get('/{comment}/edit', [CommentController::class, 'edit'])->name('personal.comment.edit');
        Route::patch('/{comment}', [CommentController::class, 'update'])->name('personal.comment.update');
        Route::delete('/{personal}', [CommentController::class, 'delete'])->name('personal.comment.delete');

    });
});

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
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
    Route::group(['namespace' => 'category', 'prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Video', 'prefix' => 'videos'], function () {
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
