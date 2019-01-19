<?php

namespace App\Http\Controllers;

use App\ContenidoPagina;
use Illuminate\Http\Request;

class ContenidoPaginaController extends Controller
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
     * Display the specified resource.
     *
     * @param  \App\ContenidoPagina  $contenidoPagina
     * @return \Illuminate\Http\Response
     */
    public function show(ContenidoPagina $contenidoPagina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContenidoPagina  $contenidoPagina
     * @return \Illuminate\Http\Response
     */
    public function editUE($id)
    {
        $contenido = ContenidoPagina::find($id);
        return view('editarusoesp')->with('contenido', $contenido);
    }

    public function editVol($id)
    {
        $contenido = ContenidoPagina::find($id);
        return view('editarvol')->with('contenido', $contenido);
    }

    public function editPub($id)
    {
        $contenido = ContenidoPagina::find($id);
        return view('editarpub')->with('contenido', $contenido);
    }

    public function editVg($id)
    {
        $contenido = ContenidoPagina::find($id);
        return view('editarvg')->with('contenido', $contenido);
    }

    public function editRe($id)
    {
        $contenido = ContenidoPagina::find($id);
        return view('editarre')->with('contenido', $contenido);
    }

    public function editAe($id)
    {
        $contenido = ContenidoPagina::find($id);
        return view('editarvol')->with('contenido', $contenido);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'texto_contenido'=> 'required',

        ]);

        $contenido = ContenidoPagina::find($id);
        $contenido->texto_contenido = $request->input('texto_contenido');
 
    
        $contenido->save();
    
    
        return redirect('/admin/catalogo')->with('success','Contenido actualizado correctamente.');
    }

    public function destroy(ContenidoPagina $contenidoPagina)
    {
        //
    }
}
