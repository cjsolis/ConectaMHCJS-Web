<?php

namespace App\Http\Controllers;

use App\ElemQr;
use Illuminate\Http\Request;

class ElemQrController extends Controller
{
    
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        
        $elementos = ElemQr::search()->orderBy('nombre_elemqr')->paginate(20);
        return view('admineleqr', compact('elementos'));
    }
    
    public function create()
    {
        //
    }

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
    
        return redirect('/admin/elemqr')->with('success','Elemento añadido con éxito.');
    }

   
    public function show(ElemQr $elemQr)
    {
        return $elemQr;
    }

    public function showApi($id)
    {
        $elem = ElemQr::find($id);
        return $elem;
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElemQr  $elemQr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elemento = ElemQr::find($id);
        return view('editarelemqr')->with('elemento', $elemento); 
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre_eleqr'=> 'required',
            'descripcion_eleqr'=> 'required',
            'url_imagen_eleqr'=> 'required|url|active_url',

        ]);

        $elemqr = ElemQr::find($id);
        $elemqr->nombre_elemqr = $request->input('nombre_eleqr');
        $elemqr->descripcion_elemqr = $request->input('descripcion_eleqr');
        $elemqr->url_img_elemqr = $request->input('url_imagen_eleqr');
 
        $elemqr->save();
    
        return redirect('/admin/elemqr')->with('success','Elemento modificado con éxito.');
    }

    public function destroy($id)
    {
        $elemento = ElemQr::find($id);
        $elemento->delete();
        
        return redirect('/admin/elemqr')->with('success', 'El Elemento QR se ha eliminado correctamente.');
    }
}
