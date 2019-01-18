<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'qr'], function(){

    //Para hacer api get de galería
    //dominio/api/qr/galeria y retorna el json en lista de todos los elementos que están en galería
    Route::get('galeria', 'GaleriaFotosController@indexApi');

    //Para usar el api get del elemento  qr
    //dominio/api/qr/elemqr/id
    //En donde id es la llave primaria de la DB
    //que contiene el elemento que se quiera sacar
    Route::get('elemqr/{elemQr}', 'ElemQrController@showApi');
});
