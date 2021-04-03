<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('');

Route::get('/categories', function () {
    return view('frontend.categories');
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

    Route::get('/articles', function () {
        return view('backend.articles');
    });
    Route::get('/categories', function () {
        return view('backend.categories');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/test', function () {
    return view('frontend.articleCards');
});
