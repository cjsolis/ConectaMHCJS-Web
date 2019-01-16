<?php

namespace App\Http\Controllers;

use App\GaleriaFotos;
use Illuminate\Http\Request;

class GaleriaFotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeria = GaleriaFotos::all();
        return $galeria;
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
            'url_imagen'=> 'required|url|active_url',

        ]);

        //  return 123;
        //create new ReservaVisitaGuiada
        $imagengaleria = new GaleriaFotos;
        $imagengaleria->url_imagen = $request->input('url_imagen');
    
        //save message
        $imagengaleria->save();
    
    
        return redirect('/admin/galeria')->with('success','Message Sent');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GaleriaFotos  $galeriaFotos
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriaFotos $galeriaFotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GaleriaFotos  $galeriaFotos
     * @return \Illuminate\Http\Response
     */
    public function edit(GaleriaFotos $galeriaFotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GaleriaFotos  $galeriaFotos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GaleriaFotos $galeriaFotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GaleriaFotos  $galeriaFotos
     * @return \Illuminate\Http\Response
     */
    public function destroy(GaleriaFotos $galeriaFotos)
    {
        //
    }
}
