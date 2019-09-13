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

Route::get('/', function() {
     return view('welcome');
  });

Route::get('hello','HelloController@index');

Route::get('morning','GreetingController@morning');

Route::get('greeting/goodnight','GreetingController@goodnight');

Route::get('users','UsersController@index')->name('user_index');

Route::get('posts','PostsController@index')->name('post_index');

//posts creat Route
Route::get('post/add','PostsController@add')->name('post_add');

Route::post('post/add','PostsController@create')->name('post_create');

// //post update Route
Route::get('post/edit','PostsController@edit')->name('post_edit');

Route::post('post/edit','PostsController@update')->name('post_update');