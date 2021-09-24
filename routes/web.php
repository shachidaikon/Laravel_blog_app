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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::get('/user/', 'UserController@index')->name('user.index');

Route::post('/posts', 'PostController@store');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');



//新しく追加
Route::get('/user/test', 'UserController@index');

