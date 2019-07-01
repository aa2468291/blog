<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'index';
});

Route::get('/about', function () {
    return 'about';
});

Route::get('/contact', function () {
    return 'contact';
});


Route::get('/posts', function () {
    return 'post list';
});

Route::get('/posts/{id}', function ($id) {
    return 'single post： '.$id;
});

