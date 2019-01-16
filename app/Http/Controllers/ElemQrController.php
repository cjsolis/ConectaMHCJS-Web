<?php

namespace App\Http\Controllers;

use App\ElemQr;
use Illuminate\Http\Request;

class ElemQrController extends Controller
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
            'nombre_eleqr'=> 'required',
            'descripcion_eleqr'=> 'required',
            'url_imagen_eleqr'=> 'required|url|active_url',

        ]);

        //  return 123;
        //create new ReservaVisitaGuiada
        $elemqr = new ElemQr;
        $elemqr->nombre_elemqr = $request->input('nombre_eleqr');
        $elemqr->descripcion_elemqr = $request->input('descripcion_eleqr');
        $elemqr->url_img_elemqr = $request->input('url_imagen_eleqr');
    
        //save message
        $elemqr->save();
    
        echo 'Si se metió acá';
        return redirect('/admin/elemqr')->with('success','Message Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ElemQr  $elemQr
     * @return \Illuminate\Http\Response
     */
    public function show(ElemQr $elemQr)
    {
        return $elemQr;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElemQr  $elemQr
     * @return \Illuminate\Http\Response
     */
    public function edit(ElemQr $elemQr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ElemQr  $elemQr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElemQr $elemQr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ElemQr  $elemQr
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElemQr $elemQr)
    {
        //
    }
}
