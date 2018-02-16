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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['namespace' => 'Front'], function(){
  // FRONT ROUTING
  //
  // HOME ROUTING
  //
  Route::get('/', 'HomeController@index')->name('home');

  // CONTACT ROUTING
  //
  Route::get('/contact', 'ContactUsController@contactView')->name('nous-contacter-view');
  Route::post('/contact', 'ContactUsController@contactAction')->name('nous-contacter-action');

  // PRESENTATION ROUTING
  //
  Route::get('/presentation', 'PresentationController@presentation')->name('presentation');

  // ANNUAIRE
  //
  Route::get('/annuaire', 'HomeController@annuaire')->name('annuaire');

  // Profil Societe
  //
  Route::get('/annuaire/society/{id}', 'HomeController@profilSociete')->name('annuaire-profil-societe');


  // INSCRIPTION SOCIETE
  //
  Route::get('/formulaire-societe', 'FormulaireSocietyController@createSociety')->name('formulaire-societe');
  Route::post('/formulaire-societe', 'FormulaireSocietyController@createSocietyAction')->name('formulaire-societe-action');


  // Route::get('/newsrss', 'NewRssController')->name('new-rss');

  // SEARCH ROUTING
  //
  Route::get('/search', 'SearchController@searchView')->name('search-view');
  Route::post('/search', 'SearchController@searchAction')->name('search-action');

  // MENTION LEGALES ROUTING
  //
  Route::get('/mentions-legales', 'MentionsController@mentions')->name('mentions-legales');

// ANNUAIRE ROUTING
  Route::get('/annuaire', 'HomeController@annuaire')->name('annuaire');

// MODIFICATION SOCIETES ROUTING
  Route::get('/mes-societes', 'UpdateSocietyFront@viewMySociety')->name('mes-societes');

  Route::get('/mes-societes/update/{idUser}', 'UpdateSocietyFront@updateMySociety')->name('update-societes');
  Route::post('/mes-societes/update/{idUser}', 'UpdateSocietyFront@updateMySocietyAction')->name('update-societes-action');

  Route::delete('/mes-societes/delete/{idSociety}', 'UpdateSocietyFront@deleteMySociety')->name('delete-societes');

});


Route::group(['namespace' => 'Admin'], function(){

  // BACK ROUTING

  Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

  // BACK USERS ROUTING

  Route::delete('/dashboard/users/delete/{id}', 'AdminUsersController@deleteUsers')->name('delete-users');

  Route::get('/dashboard/users/update/{id}', 'AdminUsersController@updateUsers')->name('update-users');
  Route::put('/dashboard/users/update/{id}', 'AdminUsersController@updateUsersAction')->name('update-users-action');

  Route::get('/dashboard/listing/users', 'AdminListingUsers@listingUsers')->name('listing-users');

  // BACK SOCIETY ROUTING

  Route::delete('/dashboard/society/delete/{id}', 'AdminSocietyController@deleteSociety')->name('delete-society');

  Route::get('/dashboard/society/update/{id}', 'AdminSocietyController@updateSociety')->name('update-society');
  Route::put('/dashboard/society/update/action/{id}', 'AdminSocietyController@updateSocietyAction')->name('update-society-action');

  Route::get('/dashboard/listing/society', 'AdminListingSociety@listingSociety')->name('listing-society');

  // BACK CATEGORIES ROUTING

  Route::get('/dashboard/categories/new', 'AdminCategoriesController@newCategories')->name('new-categories');
  Route::post('/dashboard/categories/new', 'AdminCategoriesController@newCategoriesAction')->name('new-categories-action');

  Route::get('/dashboard/categorie/update/{id}', 'AdminCategoriesController@updateCategories')->name('update-categories');
  Route::put('/dashboard/categorie/update/{id}', 'AdminCategoriesController@updateCategoriesAction')->name('update-categories-action');

  Route::delete('/dashboard/categories/delete/{id}', 'AdminCategoriesController@deleteCategories')->name('delete-categories');

  Route::get('/dashboard/listing/categories', 'AdminListingCategories@listingCategories')->name('listing-categories');
});
