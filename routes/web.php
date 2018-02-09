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

Route::get('/presentation', 'PresentationController@presentation')->name('presentation');

// Route::get('/newsrss', 'NewRssController')->name('new-rss');

Route::get('/search', 'SearchController@searchView')->name('search-view');
// Route::post('/search', 'SearchController@searchAction')->name('search-action');

Route::get('/mentions-legales', 'MentionsController@mentions')->name('mentions-legales');
