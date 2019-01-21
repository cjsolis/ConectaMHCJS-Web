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
        if(Auth::guard('admin')->check()){
            $contenido = ContenidoPagina::find($id);
            return view('editarusoesp')->with('contenido', $contenido);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function editVol($id)
    {
        if(Auth::guard('admin')->check()){
            $contenido = ContenidoPagina::find($id);
            return view('editarvol')->with('contenido', $contenido);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function editPub($id)
    {
        if(Auth::guard('admin')->check()){
            $contenido = ContenidoPagina::find($id);
            return view('editarpub')->with('contenido', $contenido);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function editVg($id)
    {
        if(Auth::guard('admin')->check()){
            $contenido = ContenidoPagina::find($id);
            return view('editarvg')->with('contenido', $contenido);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function editRe($id)
    {
        if(Auth::guard('admin')->check()){
            $contenido = ContenidoPagina::find($id);
            return view('editarre')->with('contenido', $contenido);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function editAe($id)
    {
        if(Auth::guard('admin')->check()){
            $contenido = ContenidoPagina::find($id);
            return view('editarse')->with('contenido', $contenido);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::guard('admin')->check()){
            $this->validate($request, [
                'texto_contenido'=> 'required',

            ]);

            $contenido = ContenidoPagina::find($id);
            $contenido->texto_contenido = $request->input('texto_contenido');
    
        
            $contenido->save();
        
        
            return redirect('/admin/catalogo')->with('success','Contenido actualizado correctamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function destroy(ContenidoPagina $contenidoPagina)
    {
        //
    }
}
