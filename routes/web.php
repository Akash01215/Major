<?php

Route::get('/', function () {
    return view('akash');
});


  

Route::get('/akash', function () {
    return view('akash');
});
Route::get("/akashconteller", "akashconteller@index");

Route::get("/ram", "ramcontroller@add");


Route::get("/users", "UserController@index");

// Login
Route::view('/login', 'login');
Route::post('/login-submit', 'UserController@login')->name('users.login');


//signup
Route::view("/form", "form");
Route::POST("/form", "UserController@submit") ->name('form.submit');
Route::get('/users-table', 'UserController@index')->name('users.table');

// User Routes
Route:: get('/user-delete/{id}','UserController@delete')->name('user.delete');
Route:: get('/user-edit/{id}','UserController@edit')->name('user.edit');
Route:: post('/user-update/{id}','UserController@update')->name('user.update');
Route::view('/signup-form', 'signup');
Route::post('/signup', 'UserController@signup')->name('users.signup');


// Product Routes
Route::get('/products', 'productController@index')->name('products.table');
Route::view('/product-form', 'products_form');
Route::post('/product-form', 'productController@submit')->name('products.submit');
Route::get('/product-delete/{id}', 'productController@delete')->name('products.delete');
Route::get('/product-edit/{id}', 'productController@edit')->name('products.edit');
Route::post('/product-update/{id}', 'productController@update')->name('products.update');
Route::get('/product-table', 'productController@index')->name('products.table');


// Category Routes
Route::get('/categories', 'CategoryController@index')->name('categories.table');
Route::view('/category-form', 'category_form');
Route::post('/category-form', 'CategoryController@submit')->name('categories.submit');
Route::get('/category-delete/{id}', 'CategoryController@delete')->name('categories.delete');
Route::get('/category-edit/{id}', 'CategoryController@edit')->name('categories.edit');
Route::post('/category-update/{id}', 'CategoryController@update')->name('categories.update');   

//signup
//Route::view('/signup', 'signup');
//Route::post('/signup-submit', 'UserController@signup')->name('users.signup');

