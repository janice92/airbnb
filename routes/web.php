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
Route::get('/feed', 'PostController@article')->name('feed');
Auth::routes();
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/profile', 'HomeController@index');
    Route::get('/profile/{slug}', 'ProfileController@index');
    Route::get('/changePhoto', function() {
        return view('profile.pic');
    });
    Route::post('/uploadPhoto', 'ProfileController@uploadPhoto');
    Route::get('editProfile', 'ProfileController@editProfileForm');
    Route::post('/updateProfile', 'ProfileController@updateProfile');
   
        });

Route::get('tests', 'MessageController@tests');

Route::get('/home', 'HomeController@index');
Route::get('/post', 'PostController@index');
Route::post('/post', 'PostController@store')->middleware('auth');
Route::get('/post/{id}', 'PostController@show')->name('post.show');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::put('/post/{id}/edit', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.delete')->middleware('auth');
Route::post('/comment', 'CommentController@index')->middleware('auth');
Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::get('/post/category/{name}', 'CategoryController@showAll')->name('category.showAll');

Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');
Route::get('/profile/edit/profile', [
        'uses' => 'ProfilesController@edit',
        'as' => 'profile.edit'
    ]);
    Route::post('/profile/update/profile', [
        'uses' => 'ProfilesController@update',
        'as' => 'profile.update'
    ]);
    Route::get('home/searchredirect', function(){
     
   
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "home/search/$search";
    return redirect($route);
});
Route::get("home/search/{search}", "HomeController@search");

Route::get('/profile/{username}', 'ProfilesController@profile'); 
Route::get('/task', 'TaskController@index');

Route::post('/task', 'TaskController@store')->middleware('auth');

Route::get('home/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "home/search/$search";
    return redirect($route);
});
Route::get("home/search/{search}", "HomeController@search");

Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
   Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
   Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});

Route::get('/annonces','AnnonceController@index');
Route::post('/annonces', 'AnnonceController@store')->middleware('auth');
Route::get('/annonces/{id}', 'AnnonceController@show')->name('annonce.show')->middleware('auth');
Route::get('/annonces/{id}/edit', 'AnnonceController@edit')->name('annonce.edit')->middleware('auth');
Route::put('/annonces/{id}/edit', 'AnnonceController@update')->name('annonce.update')->middleware('auth');
Route::delete('/annonces/{id}/delete', 'AnnonceController@destroy')->name('annonce.delete')->middleware('auth');


