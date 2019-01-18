<?php

namespace App\Http\Controllers;

use App\GaleriaFotos;
use Illuminate\Http\Request;

class GaleriaFotosController extends Controller
{
    public function index()
    {
        $imagenes = GaleriaFotos::all();
        return view('galeria')->with('imagenes', $imagenes);
    }
    
    public function indexApi()
    {
        $imagenes = GaleriaFotos::all();
        return $imagenes;
    }

    public function indexAdmin()
    {
        $imagenes = GaleriaFotos::search()->orderBy('descripcion_imagen')->paginate(20);
        return view('admingaleria', compact('imagenes'));
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
            'url_imagen'=> 'required|url|active_url',
            'descripcion_imagen' => 'required',

        ]);

        //  return 123;
        //create new ReservaVisitaGuiada
        $imagengaleria = new GaleriaFotos;
        $imagengaleria->url_imagen = $request->input('url_imagen');
        $imagengaleria->descripcion_imagen = $request->input('descripcion_imagen');
    
        //save message
        $imagengaleria->save();
    
    
        return redirect('/admin/galeria')->with('success','Imagen añadida.');

    }

    public function show(GaleriaFotos $galeriaFotos)
    {
        //
    }

    public function edit($id)
    {
        $imagen = GaleriaFotos::find($id);
        return view('editargaleria')->with('imagen', $imagen);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'url_imagen'=> 'required|url|active_url',
            'descripcion_imagen' => 'required',

        ]);

        $imagengaleria = GaleriaFotos::find($id);
        $imagengaleria->url_imagen = $request->input('url_imagen');
        $imagengaleria->descripcion_imagen = $request->input('descripcion_imagen');
    
        //save message
        $imagengaleria->save();
    
    
        return redirect('/admin/galeria')->with('success','Imagen actualizada.');
    }

    public function destroy($id)
    {
        $imagen = GaleriaFotos::find($id);
        $imagen->delete();
        
        return redirect('/admin/galeria')->with('success', 'La imagen se ha borrado con éxito.');
    }

}
