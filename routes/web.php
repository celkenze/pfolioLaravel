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

Route::get('/', 'PagesController@index');
Route::get('resume' , 'PagesController@resume');
Route::get('portfolio' , 'PagesController@portfolio');
Route::get('blog' , 'PagesController@blog');
Route::get('show/{slug}' , 'PagesController@show');
Route::get('videos' , 'PagesController@video');
Route::get('about' , 'PagesController@about');

