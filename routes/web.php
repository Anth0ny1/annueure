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

Route::get('/contact', 'ContactUsController')->name('nous-contacter');

Route::get('/presentation', 'PresentationController')->name('presentation');

// Route::get('/newsrss', 'NewRssController')->name('new-rss');

Route::get('/search', 'SearchController')->name('search');

Route::get('/mentions-legales', 'MentionsController')->name('mentions-legales');
