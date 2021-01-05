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
Route::get('/', 'HomeController@dashboard')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'ThreadController@index')->name('index');
Route::get('/test', 'ThreadController@test');

Route::get('/threads/category/{category}','ThreadController@showByCategory');

Route::get('/threads/tag/{tag}', 'ThreadController@showByTag');

Route::resource('threads','ThreadController');

Route::resource('categories','CategoryController');

Route::resource('tags','TagController');

Route::post('like', 'LikesController@like');
Route::delete('like', 'LikesController@dislike');
Route::post('/comment/addComment/{thread}','CommentController@addComment')->name('addComment');