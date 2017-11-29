<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function () {
    return view('products.index');
});
Route::get('products/create', function () {
    return view('products.create');
});

Route::get('categories', function () {
    return view('categories.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('api')->group(function () {
    Route::resource('products', 'ProductsController');
    Route::get('categories/options', 'CategoriesController@options');
    Route::resource('categories', 'CategoriesController');
});