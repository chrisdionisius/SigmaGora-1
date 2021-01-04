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
Route::resource('threads','ThreadController');
Route::post('like', 'LikesController@like');
Route::delete('like', 'LikesController@dislike');
Route::post('/comment/addComment/{thread}','CommentController@addComment')->name('addComment');