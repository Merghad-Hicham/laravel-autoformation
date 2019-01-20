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

Route::get('/societe', 'HomeController@index')->name('home');
Route::get('/societe/create', 'HomeController@create');
Route::post('/societe', 'HomeController@store');
Route::get('/societe/{id}/edit', 'HomeController@edit');
Route::put('/societe/{id}', 'HomeController@update');
Route::delete('/societe/{id}', 'HomeController@destroy');
Route::get('/contac', 'HomeController@contac')->name('contac');
Route::get('/hicham', 'HichamController@viewHicham')->name('viewHicham');
Route::get('/matche', 'MatcheController@matche')->name('matche');
Route::get('/entrainement', 'EntrainementController@entrainement')->name('entrainement');
Route::get('/conference', 'ConferenceController@conference')->name('conference');
