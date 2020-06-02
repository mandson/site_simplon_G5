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


Route::get('actualites', 'ActualitesController@liste');

Route::get('/evenements', function () {
    return view('evenements');   
});

Route::get('/apprenants', function () {
    return view('apprenants');
    
});

Route::get('/allumnis', function () {
    return view('allumnis');
    
});