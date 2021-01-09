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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PostController@index')->name('home');
Route::get('/create', 'PostController@create')->name('create');
Route::post('createPost', 'PostController@store')->name('store');
Route::get('/edit/{id}', 'PostController@edit')->name('edit');
Route::post('updatePost/{id}', 'PostController@update')->name('update');
Route::delete('deletePost/{id}', 'PostController@destroy')->name('destroy');
Route::get('noPosts', 'PostController@noPosts')->name('noPosts');
Route::get('decompose','\Lubusin\Decomposer\Controllers\DecomposerController@index')->name('decomposer');

