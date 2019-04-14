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
    return view('auth/login');
});
Route::get('/inscription', function () {
    return view('auth/register');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profil','UserController@index')->name('user');
Route::get('ads/index','UserController@create')->name('user');
Route::get('billet/show','ShowController@index')->name('user');
Route::get('user/{id}', 'UserController@show');
Route::get('/billet/new','BilletController@index')->name('billet');
Route::get('/billet', 'SearchController@index')->name('search');
Route::get('/user', 'ShowController@index')->name('show');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/commentaire', 'CommentaireController@index')->name('commentaire');

Auth::routes();