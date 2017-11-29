<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', function () {
    return view('categories.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('api')->group(function () {
    Route::resource('categories', 'CategoriesController');
});