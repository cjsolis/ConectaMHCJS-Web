<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;

class DocumentosController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeActa(Request $request)
    {
        //return $request->input('name');
        //obliga a que los campos de name y email se llenen,
        //si no no hace submit.
        $this->validate($request, [
            'nombre_acta'=> 'required',
            'fecha_acta'=> 'required',
            'url_acta'=> 'required|url|active_url',

        ]);

        //  return 123;
        //create new ReservaVisitaGuiada
        $documentos = new Documentos;
        $documentos->nombre_documento = $request->input('nombre_acta');
        $documentos->url_documento = $request->input('url_acta');
        $documentos->fecha_documento = $request->input('fecha_acta');
        $documentos->tipo_documento = "Acta";
        //save message
        $documentos->save();
    
    
        return redirect('/admin/noticias')->with('success','Message Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(Documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentos $documentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentos $documentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentos $documentos)
    {
        //
    }
}
