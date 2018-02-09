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

// FRONT ROUTING
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactUsController@contactView')->name('nous-contacter-view');
Route::post('/contact', 'ContactUsController@contactAction')->name('nous-contacter-action');

Route::get('/presentation', 'PresentationController@presentation')->name('presentation');

// Route::get('/newsrss', 'NewRssController')->name('new-rss');


Route::get('/search', 'SearchController@searchView')->name('search-view');
// Route::post('/search', 'SearchController@searchAction')->name('search-action');

Route::get('/mentions-legales', 'MentionsController@mentions')->name('mentions-legales');


// BACK ROUTING

Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

// BACK USERS ROUTING

Route::delete('/dashboard/users/delete/{id}', 'AdminUsersController@deleteUsers')->name('detele-users');

Route::get('/dashboard/users/update/{id}', 'AdminUsersController@updateUsers')->name('update-users');
Route::put('/dashboard/users/update/{id}', 'AdminUsersController@updateUsers')->name('update-users-action');

// BACK SOCIETY ROUTING

Route::delete('/dashboard/society/delete/{id}', 'AdminSocietyController@deleteSociety')->name('delete-society');

Route::get('/dashboard/society/update/{id}', 'AdminSocietyController@updateSociety')->name('update-society');
Route::put('/dashboard/society/update/{id}', 'AdminSocietyController@updateSociety')->name('update-society');

// BACK CATEGORIES ROUTING

Route::get('/dashboard/categories/new', 'AdminCategoriesController@newCategories')->name('new-categories');
Route::post('/dashboard/categories/new', 'AdminCategoriesController@newCategories')->name('new-categories-action');

Route::get('/dashboard/categorie/update/{id}', 'AdminCategoriesController@updateCategories')->name('update-categories');
Route::post('/dashboard/categorie/update/{id}', 'AdminCategoriesController@updateCategories')->name('update-categories-action');

Route::delete('/dashboard/categories/delete/{id}', 'AdminCategoriesController@deleteCategories')->name('delete-categories');
