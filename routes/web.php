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
Route::post('/contact/ajax', 'Ajax\AjaxController@contactUsAjax')->name('nous-contacter');

Route::group(['namespace' => 'Front'], function(){

  // NON CONFORMME VERIF
  // Route::get('/')
  // FRONT ROUTING
  //
  // HOME ROUTING
  //
  Route::get('/', 'HomeController@index')->name('home');

  // Route::get('/', 'HomeController@footer')->name('footer');

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
  Route::get('/annuaire/society/{id}', 'HomeController@profilSociete')->where('id','[0-9]+')->name('annuaire-profil-societe');


  // INSCRIPTION SOCIETE
  //
  Route::get('/formulaire-societe', 'FormulaireSocietyController@createSociety')->name('formulaire-societe')->middleware('auth','user');
  Route::post('/formulaire-societe', 'FormulaireSocietyController@createSocietyAction')->name('formulaire-societe-action')->middleware('auth','user');

  // SEARCH ROUTING
  //
  Route::get('/search', 'SearchController@searchView')->name('search-view');
  Route::post('/search', 'SearchController@searchAction')->name('search-action');

  // MENTION LEGALES ROUTING
  //
  Route::get('/mentions-legales', 'MentionsController@mentions')->name('mentions-legales');

  // ANNUAIRE ROUTING
  //
  Route::get('/annuaire', 'HomeController@annuaire')->name('annuaire');

  // MODIFICATION SOCIETES ROUTING
  //
  Route::get('/mes-societes', 'UpdateSocietyFront@viewMySociety')->name('mes-societes')->middleware('auth','user');

  Route::get('/mes-societes/update/{idSociety}', 'UpdateSocietyFront@updateMySociety')->where('idSociety','[0-9]+')->name('update-societes')->middleware('auth','user');
  Route::put('/mes-societes/update/{idSociety}', 'UpdateSocietyFront@updateMySocietyAction')->where('idSociety','[0-9]+')->name('update-societes-action')->middleware('auth','user');

  Route::delete('/mes-societes/delete/{idSociety}', 'UpdateSocietyFront@deleteMySociety')->where('idSociety','[0-9]+')->name('delete-societes')->middleware('auth','user');

  // LISTING SOCIETES PAR CATEGORIES FRONT ROUTING
  //
  Route::get('/search/categorie/{categorieName}', 'HomeController@listingByCategorie')->name('listing-by-categorie');


});


Route::group(['namespace' => 'Admin', 'middleware' => ['auth','admin']], function(){

  // BACK ROUTING

  Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

  // BACK MODERATION ROUTING
  Route::post('/dashboard/moderation/valide/{idSociety}', 'AdminController@valideModeration')->where('idSociety','[0-9]+')->name('valide-moderation');

  Route::post('/dashboard/moderation/non-conforme/{idSociety}', 'AdminController@nonConformeModeration')->where('idSociety','[0-9]+')->name('non-conforme-moderation');
  // BACK USERS ROUTING

  Route::delete('/dashboard/users/delete/{id}', 'AdminUsersController@deleteUsers')->where('id','[0-9]+')->name('delete-users');

  Route::get('/dashboard/users/update/{id}', 'AdminUsersController@updateUsers')->where('id','[0-9]+')->name('update-users');
  Route::put('/dashboard/users/update/{id}', 'AdminUsersController@updateUsersAction')->where('id','[0-9]+')->name('update-users-action');

  Route::get('/dashboard/listing/users', 'AdminListingUsers@listingUsers')->name('listing-users');

  // BACK SOCIETY ROUTING

  Route::delete('/dashboard/society/delete/{id}', 'AdminSocietyController@deleteSociety')->where('id','[0-9]+')->name('delete-society');

  Route::get('/dashboard/society/update/{id}', 'AdminSocietyController@updateSociety')->where('id','[0-9]+')->name('update-society');
  Route::put('/dashboard/society/update/{id}', 'AdminSocietyController@updateSocietyAction')->where('id','[0-9]+')->name('update-society-action');

  Route::get('/dashboard/listing/society', 'AdminListingSociety@listingSociety')->name('listing-society');

  // BACK CATEGORIES ROUTING

  Route::get('/dashboard/categories/new', 'AdminCategoriesController@newCategories')->name('new-categories');
  Route::post('/dashboard/categories/new', 'AdminCategoriesController@newCategoriesAction')->name('new-categories-action');

  Route::get('/dashboard/categorie/update/{id}', 'AdminCategoriesController@updateCategories')->where('id','[0-9]+')->name('update-categories');
  Route::put('/dashboard/categorie/update/{id}', 'AdminCategoriesController@updateCategoriesAction')->where('id','[0-9]+')->name('update-categories-action');

  Route::delete('/dashboard/categories/delete/{id}', 'AdminCategoriesController@deleteCategories')->where('id','[0-9]+')->name('delete-categories');

  Route::get('/dashboard/listing/categories', 'AdminListingCategories@listingCategories')->name('listing-categories');
});
