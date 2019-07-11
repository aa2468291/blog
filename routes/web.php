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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


//CRUD
Route::post('/posts','PostController@store');
Route::get('/posts/{post}','PostController@show');
Route::put('/posts/{post}','PostController@update');
Route::delete('/posts/{post}','PostController@destroy');

// 3 routing: create / edit / list

Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}/edit','PostController@edit');
Route::get('/posts','PostController@index');






//Route::get('/posts', function () {
//    $posts = [1,2,3,4,5];
//    return view('posts.list',compact('posts'));
//});
//
//Route::get('/posts/{id}', function ($id) {
//    return view('posts.show');
//});

