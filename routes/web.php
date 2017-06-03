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

use App\Models\Post;

Route::get('/', function () {
    //return view('welcome');
    return Post::all();
});

Route::get('/posts', 'PostController@index');
Route::post('posts', 'PostController@store');
Route::get('posts/{post}', 'PostController@show');
Route::put('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
