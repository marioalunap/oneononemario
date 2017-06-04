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

    return view('welcome');
    //return Post::all();
});

Route::resource('posts', 
		'PostController', 
		[
			'middleware'=>'App\Http\Middleware\PostOwner'
		]
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('temp', function () {
	return App\Models\Post::create([
			'content' => "Aqui testeando",
			'user_id' => \Auth::user()->id
		]);
    //return Post::all();
});