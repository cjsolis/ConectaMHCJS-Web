<?php

namespace App\Http\Controllers;

use App\CatalogoPiezas;
use Illuminate\Http\Request;

class CatalogoPiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->input('name');
        //obliga a que los campos de name y email se llenen,
        //si no no hace submit.
        $this->validate($request, [
            'nombre_pieza'=> 'required',
            'descripcion_pieza'=> 'required',
            'url_imagen_pieza'=> 'required|url|active_url',

        ]);

        //  return 123;
        //create new ReservaVisitaGuiada
        $pieza = new CatalogoPiezas;
        $pieza->nombre_pieza = $request->input('nombre_pieza');
        $pieza->descripcion_pieza = $request->input('descripcion_pieza');
        $pieza->url_img_pieza = $request->input('url_imagen_pieza');
    
        //save message
        $pieza->save();
    
    
        return redirect('/admin/catalogo')->with('success','Message Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CatalogoPiezas  $catalogoPiezas
     * @return \Illuminate\Http\Response
     */
    public function show(CatalogoPiezas $catalogoPiezas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CatalogoPiezas  $catalogoPiezas
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoPiezas $catalogoPiezas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CatalogoPiezas  $catalogoPiezas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatalogoPiezas $catalogoPiezas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CatalogoPiezas  $catalogoPiezas
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatalogoPiezas $catalogoPiezas)
    {
        //
    }
}
