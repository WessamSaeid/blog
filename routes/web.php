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
    return view('welcome');
});
Route::get('posts', 'Postscontroller@index')->name('posts.index')->middleware('auth');
Route::get('posts/create', 'Postscontroller@create')->middleware('auth');
Route::post('posts', 'Postscontroller@store')->middleware('auth');
Route::get('posts/{id}/edit', 'Postscontroller@edit')->middleware('auth');
Route::put('posts/{id}', 'Postscontroller@update')->middleware('auth');
Route::delete('posts/{id}', 'Postscontroller@destroy')->middleware('auth');
Route::get('posts/{id}', 'Postscontroller@show')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
