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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/task', 'TaskController@index');

Route::get('/annonces','AnnonceController@index');
Route::post('/annonces', 'AnnonceController@store')->middleware('auth');
Route::get('/annonces/{id}', 'AnnonceController@show')->name('annonce.show')->middleware('auth');
Route::get('/annonces/{id}/edit', 'AnnonceController@edit')->name('annonce.edit')->middleware('auth');
Route::put('/annonces/{id}/edit', 'AnnonceController@update')->name('annonce.update')->middleware('auth');
Route::delete('/annonces/{id}/delete', 'AnnonceController@destroy')->name('annonce.delete')->middleware('auth');


