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

/*Secciones sin implementar
*/
Route::get('/contactenos', 'PagesController@getContactenos');
Route::get('/exhibicionespermanentes', 'PagesController@getExhibicionesPermanentes');
Route::get('/exhibicionestemporales', 'PagesController@getExhibicionesTemporales');
Route::get('/eventos', 'PagesController@getEventos');
Route::get('/campananacional', 'PagesController@getCampanaNacional');
Route::get('/centroinformacion', 'PagesController@getCentroInfo');
Route::get('/arquitecturamuseo', 'PagesController@getArquitecturaMuseo');
Route::get('/guinos', 'PagesController@getGuinos');
Route::get('/preguntasfrecuentes', 'PagesController@getPregunasFrecuentes');
Route::get('/denunciasquejas', 'PagesController@getDenunciasQuejas');
Route::get('/enlacesamigos', 'PagesController@getEnlacesAmigos');


Route::get('/', 'PagesController@getHome');
Route::get('/acerca', 'PagesController@getAcerca');



Route::get('/servicios', 'PagesController@getServicios');
Route::get('/recursos', 'PagesController@getRecursos');
Route::get('/visitaguiada', 'PagesController@getVisitaGuiada');
Route::get('/servicioseducativos', 'PagesController@getServiciosEducativos');



Route::get('/transparencia', 'PagesController@getTransparencia');
Route::get('/tramites', 'PagesController@getTramites');


Route::get('/logintienda', 'PagesController@getLogin');
Route::get('/registrarsetienda', 'PagesController@getRegistrarse');

Route::get('/reservavisitaguiada', 'PagesController@getReservaVisitaGuiada');

Route::get('/admin/formularios', 'PagesController@getAdminFormularios');


Route::get('/admin/servicios', 'PagesController@getAdminServicios');
Route::get('/admin/tramites', 'PagesController@getAdminTramites');
/* Route::get('/admin/transparencia', 'PagesController@getAdminTransparencia'); */
/* Route::get('/admin/reservaciones', 'PagesController@getAdminReservaciones'); */
/* Route::get('/admin/usuarios', 'PagesController@getAdminUsuarios'); */

Route::post('/reservavisitaguiada/Enviar', 'FormularioReservaVisitaGuiadaController@Enviar');
Route::post('/tramites/EnviarUsoEspacios', 'FormularioUsoEspaciosController@EnviarUsoEspacios');
Route::post('/tramites/EnviarVoluntariado', 'FormularioVoluntariadoController@EnviarVoluntariado');



// Rutas para los elementos de la tabla noticias
// Sitio Web
Route::get('/noticias', 'NoticiasController@index');
Route::get('/noticias/{noticia}', 'NoticiasController@show');

// Sistema Administrador
Route::get('/admin/noticias', 'NoticiasController@indexAdmin');
Route::post('/admin/noticias/agregar', 'NoticiasController@store');
Route::delete('/admin/noticias/{noticia}', 'NoticiasController@destroy');
Route::get('/admin/noticias/{noticia}/editar', 'NoticiasController@edit');
Route::put('/admin/noticias/{noticia}', 'NoticiasController@update');

// Rutas para los elementos del catálogo de piezas
// Sitio web
Route::get('/catalogo', 'CatalogoPiezasController@index');
// Falta uno, todavía no está implementado

// Sistema Administrador
Route::get('/admin/catalogo', 'CatalogoPiezasController@indexAdmin');
Route::post('/admin/catalogo/agregar', 'CatalogoPiezasController@store');
Route::delete('/admin/catalogo/{pieza}', 'CatalogoPiezasController@destroy');
Route::get('/admin/catalogo/{pieza}/editar', 'CatalogoPiezasController@edit');
Route::put('/admin/catalogo/{pieza}', 'CatalogoPiezasController@update');

// Rutas para los elementos del lector QR
// Sitio web
//Route::get('/catalogo', 'CatalogoPiezasController@index');
// Falta uno, todavía no está implementado

// Sistema Administrador
Route::get('/admin/elemqr', 'ElemQrController@indexAdmin');
Route::post('/admin/elemqr/agregar', 'ElemQrController@store');
Route::delete('/admin/elemqr/{elemento}', 'ElemQrController@destroy');
Route::get('/admin/elemqr/{elemento}/editar', 'ElemQrController@edit');
Route::put('/admin/elemqr/{elemento}', 'ElemQrController@update');

// Rutas para los elementos de la galeria
// Sitio web
Route::get('/galeria', 'GaleriaFotosController@index');
// Falta uno, todavía no está implementado

// Sistema Administrador
Route::get('/admin/galeria', 'GaleriaFotosController@indexAdmin');
Route::post('/admin/galeria/agregar', 'GaleriaFotosController@store');
Route::delete('/admin/galeria/{foto}', 'GaleriaFotosController@destroy');
Route::get('/admin/galeria/{foto}/editar', 'GaleriaFotosController@edit');
Route::put('/admin/galeria/{foto}', 'GaleriaFotosController@update');

// Rutas para los elementos de transparencia
// Sitio web
//Route::get('/galeria', 'GaleriaFotosController@index');
// Falta uno, todavía no está implementado

// Sistema Administrador
Route::get('/admin/transparencia', 'DocumentosController@indexAdminTransp');
Route::post('/admin/transparencia/agregar', 'DocumentosController@storeActa');
Route::delete('/admin/transparencia/{acta}', 'DocumentosController@destroy');
Route::get('/admin/transparencia/{acta}/editar', 'DocumentosController@editActa');
Route::put('/admin/transparencia/{acta}', 'DocumentosController@updateActa');

// Rutas para editar secciones de trámites
Route::get('/admin/tramites/{contenido}/editarue', 'ContenidoPaginaController@editUE');
Route::get('/admin/tramites/{contenido}/editarvol', 'ContenidoPaginaController@editVol');
Route::get('/admin/tramites/{contenido}/editarpub', 'ContenidoPaginaController@editPub');

// Rutas para editar secciones de servicios
Route::get('/admin/servicios/{contenido}/editarvg', 'ContenidoPaginaController@editVg');
Route::get('/admin/servicios/{contenido}/editarre', 'ContenidoPaginaController@editRe');
Route::get('/admin/servicios/{contenido}/editarae', 'ContenidoPaginaController@editAe');
Route::put('/admin/actualizar/{contenido}', 'ContenidoPaginaController@update');

// Rutas para formulario de uso de espacios
Route::get('/admin/formue', 'FormularioUsoEspaciosController@index');
Route::delete('/admin/formue/{formulario}', 'FormularioUsoEspaciosController@destroy');

// Rutas para formulario de uso de espacios
Route::get('/admin/formvol', 'FormularioVoluntariadoController@index');
Route::delete('/admin/formvol/{formulario}', 'FormularioVoluntariadoController@destroy');

// Rutas para los usuarios
Route::get('/admin/usuarios', 'UsersController@index');
Route::delete('/admin/usuarios/{usuario}', 'UsersController@destroy');

//Reservaciones
Route::get('/admin/reservaciones', 'FormularioReservaVisitaGuiadaController@indexAdmin');
Route::delete('/admin/reservaciones/{reserva}', 'FormularioReservaVisitaGuiadaController@destroy');

Auth::routes();

Route::get('/dashboardreservas', 'FormularioReservaVisitaGuiadaController@index');
Route::delete('/dashboardreservas/{reserva}', 'FormularioReservaVisitaGuiadaController@destroyCancelar');

//debe estar en ese orden:
//route::prefix('admin')->group(function(){//este group es como decir /admin/login.
Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
