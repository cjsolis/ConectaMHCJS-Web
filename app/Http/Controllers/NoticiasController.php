<?php

namespace App\Http\Controllers;

use App\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function indexAdmin()
    {
        if(Auth::guard('admin')->check()){
            $noticias = Noticias::search()->orderBy('titulo_noticia')->paginate(20);
        
            return view('adminnoticias', compact('noticias'));
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticias::orderBy('fecha_noticia', 'desc')->paginate(4);
        return view('noticias')->with('noticias', $noticias);
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
        if(Auth::guard('admin')->check()){
            //return $request->input('name');
            //obliga a que los campos de name y email se llenen,
            //si no no hace submit.
            $this->validate($request, [
                'titulo_noticia'=> 'required',
                'descripcion_noticia'=> 'required',
                'contenido_noticia'=> 'required',

            ]);

            //  return 123;
            //create new ReservaVisitaGuiada
            $noticias = new Noticias;
            $noticias->titulo_noticia = $request->input('titulo_noticia');
            $noticias->descripcion_noticia = $request->input('descripcion_noticia');
            $noticias->contenido_noticia = $request->input('contenido_noticia');
            $noticias->fecha_noticia = now();
            //save message
            $noticias->save();
        
        
            return redirect('/admin/noticias')->with('success','Noticia añadida con éxito.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$noticia = Noticias::all()->where('titulo_noticia','LIKE', $id);
        $noticia = Noticias::find($id);
        return view('mostrarnoticia')->with('noticia', $noticia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::guard('admin')->check()){
            $noticia = Noticias::find($id);
            return view('editarnoticia')->with('noticia', $noticia);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::guard('admin')->check()){
            //return $request->input('name');
            //obliga a que los campos de name y email se llenen,
            //si no no hace submit.
            $this->validate($request, [
                'titulo_noticia'=> 'required',
                'descripcion_noticia'=> 'required',
                'contenido_noticia'=> 'required',

            ]);
            
            $noticias = Noticias::find($id);
            $noticias->titulo_noticia = $request->input('titulo_noticia');
            $noticias->descripcion_noticia = $request->input('descripcion_noticia');
            $noticias->contenido_noticia = $request->input('contenido_noticia');

            //save message
            $noticias->save();
        
        
            return redirect('/admin/noticias')->with('success','Noticia modificada con éxito.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::guard('admin')->check()){
            $noticia = Noticias::find($id);
            $noticia->delete();
            
            return redirect('/admin/noticias')->with('success', 'La noticia se ha eliminado correctamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }
}
