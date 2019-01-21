<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{

    public function index()
    {
        //
    }

    public function indexAdminTransp()
    {
        if(Auth::guard('admin')->check()){
            $documentos = Documentos::search()->orderBy('nombre_documento')->paginate(300);
            return view('admintransparencia', compact('documentos'));
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
        //
    }

    public function storeActa(Request $request)
    {
        if(Auth::guard('admin')->check()){

            $this->validate($request, [
                'nombre_acta'=> 'required',
                'tipo_documento' => 'required',
                'fecha_acta'=> 'required',
                'url_acta'=> 'required|url|active_url',

            ]);

            $documentos = new Documentos;
            $documentos->nombre_documento = $request->input('nombre_acta');
            $documentos->url_documento = $request->input('url_acta');
            $documentos->fecha_documento = $request->input('fecha_acta');
            $documentos->tipo_documento = $request->input('tipo_documento');

            $documentos->save();
        
        
            return redirect('/admin/transparencia')->with('success','Acta añadida correctamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function editActa($id)
    {
        if(Auth::guard('admin')->check()){
            $documento = Documentos::find($id);
            return view('editaractas')->with('documento', $documento);
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function updateActa(Request $request, $id)
    {
        if(Auth::guard('admin')->check()){
            $this->validate($request, [
                'nombre_acta'=> 'required',
                'tipo_documento' => 'required',
                'fecha_acta'=> 'required',
                'url_acta'=> 'required|url|active_url',

            ]);

            $documentos = Documentos::find($id);
            $documentos->nombre_documento = $request->input('nombre_acta');
            $documentos->url_documento = $request->input('url_acta');
            $documentos->fecha_documento = $request->input('fecha_acta');
            $documentos->tipo_documento = $request->input('tipo_documento');

            $documentos->save();
        
        
            return redirect('/admin/transparencia')->with('success','Acta actualizada correctamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function destroy($id)
    {
        if(Auth::guard('admin')->check()){
            $documento = Documentos::find($id);
            $documento->delete();
            
            return redirect('/admin/transparencia')->with('success', 'El acta se ha borrado con éxito.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }
    
}
