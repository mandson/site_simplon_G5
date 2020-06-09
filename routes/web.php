<?php



   // *****************Route vers la page d '   accueil*************

Route::get('/', 'AccueilController@index');
Route::get('/fetch_image/{id}', 'AccueilController@fetch_image');

Route::get('/', 'Accueil_even_Controller@index');
 Route::get('/fetch_image/{id}', 'Accueil_even_Controller@fetch_even');

//  Route::get('/', 'Accueil_app_Controller@index3');
//  Route::get('/fetch_image/{id}', 'AccueilController@fetch_app');
//  // *****************FIN   Route vers la page d '   accueil*************

 // *****************Route vers la page  ACTUALITE ET APPRENANT POUR LES VISITEURS*************
Route::get('vi_actualite', 'Vi_actualitesController@index');
Route::get('vi_actualite/fetch_image/{id}', 'Vi_actualitesController@fetch_image');

Route::get('vi_apprenants', 'Vi_apprenantsController@index');
Route::get('vi_apprenants/fetch_image/{id}', 'vi_apprenantsController@fetch_image');
       
// *****************Route vers la page d '   accueil*************


//***************** Route vers les pages de gestion Administration*************

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


//***************** Route vers les pages de gestion Administration*************
