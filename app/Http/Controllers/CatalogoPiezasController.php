<?php

namespace App\Http\Controllers;

use App\CatalogoPiezas;
use Illuminate\Http\Request;
use Auth;

class CatalogoPiezasController extends Controller
{
    
    public function index()
    {
        $piezas = CatalogoPiezas::orderBy('nombre_pieza', 'asc')->paginate(100);
        return view('catalogo')->with('piezas', $piezas);
    }

    public function indexAdmin()
    {
        if(Auth::guard('admin')->check()){
            $piezas = CatalogoPiezas::search()->orderBy('nombre_pieza')->paginate(100);
            return view('admincatalogo', compact('piezas'));
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');
        }   
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        if(Auth::guard('admin')->check()){
            $this->validate($request, [
                'nombre_pieza'=> 'required',
                'descripcion_pieza'=> 'required',
                'url_imagen_pieza'=> 'required|url|active_url',

            ]);

            $pieza = new CatalogoPiezas;
            $pieza->nombre_pieza = $request->input('nombre_pieza');
            $pieza->descripcion_pieza = $request->input('descripcion_pieza');
            $pieza->url_img_pieza = $request->input('url_imagen_pieza');
        
            $pieza->save();
        
        
            return redirect('/admin/catalogo')->with('success','Pieza añadida exitosamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function show($id)
    {
        $pieza = CatalogoPiezas::find($id);
        return view('verpieza')->with('pieza', $pieza); // Cambiar cuando se vaya a mostrar algo
    }

    public function edit($id)
    {
        if(Auth::guard('admin')->check()){
            $pieza = CatalogoPiezas::find($id);
            return view('editarpieza')->with('pieza', $pieza); // Cambiar cuando se vaya a motrar algo
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::guard('admin')->check()){
            $this->validate($request, [
                'nombre_pieza'=> 'required',
                'descripcion_pieza'=> 'required',
                'url_imagen_pieza'=> 'required|url|active_url',

            ]);

            $pieza = CatalogoPiezas::find($id);
            $pieza->nombre_pieza = $request->input('nombre_pieza');
            $pieza->descripcion_pieza = $request->input('descripcion_pieza');
            $pieza->url_img_pieza = $request->input('url_imagen_pieza');
        
            $pieza->save();
        
        
            return redirect('/admin/catalogo')->with('success','Pieza actualizada exitosamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function destroy($id)
    {
        if(Auth::guard('admin')->check()){
            $pieza = CatalogoPiezas::find($id);
            $pieza->delete();
            
            return redirect('/admin/catalogo')->with('success', 'La pieza se ha eliminado correctamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }
}
