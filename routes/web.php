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
//View::share('languages', \App\Language::all());
//View::share('arts', \App\Art::all());
Route::get('/tnc','SessionsController@tnc');


Route::get('/','ArtistController@index');
Route::post('/store','ArtistController@store');


Route::get('/login','SessionsController@getlogin');
Route::post('/login','SessionsController@login')->name('login');
Route::get('/logout','SessionsController@logout');
Route::get('/get_art','ArtController@get_art');


Route::group(['middleware'=>['auth'], 'prefix' => 'admin'], function()
{
Route::get('/logout','SessionsController@logout');
Route::get('/settings','SessionsController@settings');
Route::post('/change_password','SessionsController@change_password');

Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::get('/artist','ArtistController@view');
Route::get('/artist/view_details/{id}','ArtistController@view_details');


Route::get('/artist/edit/{id}','ArtistController@edit');
Route::post('/artist/update/{id}','ArtistController@update')->name('artist.update');
Route::delete('/artist/destory/{id}','ArtistController@delete');

Route::get('/print','PrintController@index');
Route::get('/print/artistapi','PrintController@artistapi');

Route::post('/print/print_details','PrintController@print_details');






//languages
Route::get('/language','LanguageController@index');
Route::get('/language/create','LanguageController@create');
Route::get('/language/edit/{id}','LanguageController@edit');
Route::post('/language/store','LanguageController@store');
Route::post('/language/update/{id}','LanguageController@update')->name('language.update');
Route::delete('/language/{id}','LanguageController@destroy');

Route::get('/art','ArtController@index');
Route::get('/art/create','ArtController@create');
Route::get('/art/edit/{id}','ArtController@edit');
Route::post('/art/store','ArtController@store');
Route::post('/art/update/{id}','ArtController@update')->name('art.update');
Route::delete('/art/{id}','ArtController@destroy');


});
