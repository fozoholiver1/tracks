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
//.........................................................................song routes
Route::get('/songs/create', 'SongsController@create')->name('song.create');
Route::post('/songs', 'SongsController@store')->name('song.store');
Route::get('/songs/{artist}', 'SongsController@show')->name('song.show');

//................................`.....................................................................artist routes
Route::get('/a/create', 'ArtistController@create')->name('artist.create');
Route::post('/a', 'ArtistController@store')->name('artist.store');
Route::get('/a/all', 'ArtistController@index')->name('artist.home');
Route::get('/a/{artist}/edit', 'ArtistController@edit')->name('artist.edit');
Route::patch('/a/{artist}', 'ArtistController@update')->name('artist.update');
// Route::get('/a/{artist}', 'ArtistController@show')->name('song.show');


Route::get('/home', 'HomeController@index')->name('home');
