<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioUsoEspacios;
use Auth;

class FormularioUsoEspaciosController extends Controller
{
  public function EnviarUsoEspacios(Request $request){
    
    $this->validate($request, [
      'nombre_uso_de_espacios'=> 'required|max:191',
      'correo_uso_de_espacios'=> 'required|email|max:191',
      'telefono_uso_de_espacios'=> 'required|integer|digits:8',
      'fecha_uso_de_espacios'=>'required',
      'motivo_uso_de_espacios'=>'required',

    ]);

    $reservausoespacios = new FormularioUsoEspacios;
    $reservausoespacios->nombre = $request->input('nombre_uso_de_espacios');
    $reservausoespacios->correo = $request->input('correo_uso_de_espacios');
    $reservausoespacios->telefono = $request->input('telefono_uso_de_espacios');
    $reservausoespacios->institucion = $request->input('institucion_usoespacios');
    $reservausoespacios->fecha = $request->input('fecha_uso_de_espacios');
    $reservausoespacios->motivo = $request->input('motivo_uso_de_espacios');
    $reservausoespacios->estado = 'Sin leer';

    $reservausoespacios->save();


    return redirect('/tramites')->with('success','Formulario enviado con éxito.');

  }

  public function index()
  {
    if(Auth::guard('admin')->check()){
      $formularios = FormularioUsoEspacios::orderBy('created_at', 'desc')->paginate(100);
      return view('adminformuetabla')->with('formularios', $formularios);
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }

  public function show($id){
    if(Auth::guard('admin')->check()){
      $formulario = FormularioUsoEspacios::find($id);
      return view('adminformue')->with('formulario', $formulario);
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }

  public function update(Request $request, $id){

    $formulario = FormularioUsoEspacios::find($id);

    $formulario->estado = 'Leída';

    $formulario->save();
    return redirect('/admin/formue');

  }

  public function destroy($id)
  {
    if(Auth::guard('admin')->check()){
      $formulario = FormularioUsoEspacios::find($id);
      $formulario->delete();
        
      return redirect('/admin/formue')->with('success', 'El formulario se ha eliminado correctamente.');
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }
}
