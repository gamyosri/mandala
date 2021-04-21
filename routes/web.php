<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('');

Route::get('/categories', function () {

});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::group(['prefix' => 'myspace'], function () {

    Route::get('/', function () {
        return view('backend.layout');
    });

    Route::group(['prefix' => 'articles'], function () {
        Route::get('/', function () {
            return view('backend.articles');
        });
        Route::get('/{id}', function () {
            return view('backend.articles');
        });
        Route::get('/add', function () {
            return view('backend.articles');
        });
        Route::post('/edit', function () {
            return view('backend.articles');
        });
        Route::post('/delete', function () {
            return view('backend.articles');
        });

    });


    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'showCategories']);
        Route::get('/{id}', [CategoryController::class, 'showCategory']);
        Route::post('/add', [CategoryController::class, "addCategory"]);
        Route::get('/edit/{id}', [CategoryController::class, 'editCategory']);
        Route::get('/delete', [CategoryController::class, 'deleteCategory']);
    });

    Route::get('/messages', [MessageController::class,'index']);
});

Route::post('/subscription',[SubscriptionController::class,'saveEmail']);
Route::post('/message',[MessageController::class,'create']);

Route::get('/test', function () {
    return view('backend.article-modal');
});
