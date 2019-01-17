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
Route::get('/visitaguiada', 'PagesController@getVisitaGuiada');
Route::get('/servicioseducativos', 'PagesController@getServiciosEducativos');
Route::get('/campananacional', 'PagesController@getCampanaNacional');
Route::get('/centroinformacion', 'PagesController@getCentroInfo');
Route::get('/arquitecturamuseo', 'PagesController@getArquitecturaMuseo');
Route::get('/guinos', 'PagesController@getGuinos');
Route::get('/catalogo', 'PagesController@getCatalogo');
Route::get('/transparencia', 'PagesController@getTransparencia');
Route::get('/tramites', 'PagesController@getTramites');
Route::get('/preguntasfrecuentes', 'PagesController@getPregunasFrecuentes');
Route::get('/denunciasquejas', 'PagesController@getDenunciasQuejas');
Route::get('/enlacesamigos', 'PagesController@getEnlacesAmigos');
Route::get('/logintienda', 'PagesController@getLogin');
Route::get('/registrarsetienda', 'PagesController@getRegistrarse');
Route::get('/catalogotienda', 'PagesController@getCatalogoTienda');
Route::get('/reservavisitaguiada', 'PagesController@getReservaVisitaGuiada');

/** Rutas del sistema administrador */
//Route::get('/admin', 'PagesController@getAdmin');
Route::get('/admin/elemqr', 'PagesController@getAdminElemQR');
Route::get('/admin/catalogo', 'PagesController@getAdminCatalogo');
Route::get('/admin/formularios', 'PagesController@getAdminFormularios');
Route::get('/admin/galeria', 'PagesController@getAdminGaleria');
Route::get('/admin/noticias', 'PagesController@getAdminNoticias');
Route::get('/admin/servicios', 'PagesController@getAdminServicios');
Route::get('/admin/tramites', 'PagesController@getAdminTramites');
Route::get('/admin/transparencia', 'PagesController@getAdminTransparencia');
Route::get('/admin/reservaciones', 'PagesController@getAdminReservaciones');
Route::get('/admin/usuarios', 'PagesController@getAdminUsuarios');

Route::post('/reservavisitaguiada/Enviar', 'FormularioReservaVisitaGuiadaController@Enviar');
Route::post('/tramites/EnviarUsoEspacios', 'FormularioUsoEspaciosController@EnviarUsoEspacios');
Route::post('/tramites/EnviarVoluntariado', 'FormularioVoluntariadoController@EnviarVoluntariado');
Route::post('/admin/galeria/EnviarImagen', 'GaleriaFotosController@store');
Route::post('/admin/catalogo/EnviarPieza', 'CatalogoPiezasController@store');
Route::post('/admin/elemqr/EnviarElemQR', 'ElemQrController@store');
Route::post('/admin/noticias/EnviarNoticia', 'NoticiasController@store');
Route::post('/admin/tramites/EnviarActa', 'DocumentosController@storeActa');

// Prueba de get cosas
Route::get('/admin/galeria/BuscarImagen', 'GaleriaFotosController@index'); //Este creo que ni es necesario, era un intento para hacer get de las mierdas

Route::delete('/admin/galeria/EliminarImagen/{id_imagen}', 'GaleriaFotosController@destroy');

Route::get('/admin', 'MainController@index');
Route::post('/admin/checklogin', 'MainController@checklogin');
Route::get('admin/successlogin', 'MainController@successlogin');
Route::get('admin/logout', 'MainController@logout');
