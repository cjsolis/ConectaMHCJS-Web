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

Route::get('/', 'PagesController@getHome');
Route::get('/acerca', 'PagesController@getAcerca');
Route::get('/contactenos', 'PagesController@getContactenos');
Route::get('/galeria', 'PagesController@getGaleria');
Route::get('/noticias', 'PagesController@getNoticias');
Route::get('/exhibicionespermanentes', 'PagesController@getExhibicionesPermanentes');
Route::get('/exhibicionestemporales', 'PagesController@getExhibicionesTemporales');
Route::get('/eventos', 'PagesController@getEventos');
Route::get('/servicios', 'PagesController@getServicios');
Route::get('/recursos', 'PagesController@getRecursos');


Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');
