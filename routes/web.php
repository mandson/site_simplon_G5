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



   // *****************Route vers les pages Visiteurs*************
Route::get('/', function () {
    return view('../../actualite/visiteur/accueil');
});

// Route::get('vi_actualite', function () {
//     return view('../../actualite/visiteur/vi_actualite');
// });

// Route::get('vi_apprenants', function () {
//     return view('../../actualite/visiteur/vi_apprenants');
// });


// Route::get('vi_actualite', 'Vi_actualitesController@index');
// Route::get('vi_actualite', 'Vi_actualitesController@insert_image');
Route::get('vi_actualite', 'Vi_actualitesController@index');
Route::get('vi_actualite/fetch_image/{id}', 'Vi_actualitesController@fetch_image');
//*****************FIN Route vers les pages de gestion Visiteurs*************






//*****************Route vers les pages de gestion Administration*************

// Route::get('actualites', 'ActualitesController@liste');

// Route::get('/evenements','EvenementsController@liste');
// Route::get('/evenements','EvenementsController@fetch_image');
// Route::get('/apprenants','ApprenantsController@liste');

// Route::post('actualites','ActualitesController@stock');
// Route::post('/evenements','EvenementsController@stock');
// Route::post('apprenants','ApprenantsController@stock');

//***************** FIN Route vers les pages de gestion Administration*************

Route::get('administration', function () {
    return view('welcome');
    
});
Route::get('store_allumnis', function () {
    return view('allumnis');
});

Route::get('store_evenements', 'StoreEvenementController@index'); 
Route::post('store_evenements/insert_image', 'StoreEvenementController@insert_image'); 
Route::get('store_evenements/fetch_image/{id}', 'StoreEvenementController@fetch_image');


  Route::get('store_actualite', 'StoreActualiteController@index');
  Route::post('store_actualite/insert_image', 'StoreActualiteController@insert_image');
  Route::get('store_actualite/fetch_image/{id}', 'StoreActualiteController@fetch_image');

  Route::get('store_apprenants', 'StoreApprenantController@index');
   Route::post('store_apprenants/insert_image', 'StoreApprenantController@insert_image'); 
   Route::get('store_apprenants/fetch_image/{id}', 'StoreApprenantController@fetch_image');
