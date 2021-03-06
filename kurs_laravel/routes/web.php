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
Route::get('/', 'VideosController@index');


Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('videos/category/{id}','CategoryController@about');


// Route::post('/videos','VideosController@store');
// 	Route::get('/videos','VideosController@index');
// 	Route::get('/videos/create','VideosController@create');
	


Route::group(['middleware' =>['web']],function(){


	

	Route::resource('videos','VideosController');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
