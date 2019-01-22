<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioVoluntariado;
use Auth;

class FormularioVoluntariadoController extends Controller
{
  public function EnviarVoluntariado(Request $request){
    //return $request->input('name');
    //obliga a que los campos de name y email se llenen,
    //si no no hace submit.
    $this->validate($request, [
      'nombre_voluntario'=> 'required|max:191',
      'correo_voluntario'=> 'required|email|max:191',
      'telefono_voluntario'=> 'required|integer|digits:8',
      'motivo_voluntario'=>'required',


    ]);
    //  return 123;
    //create new reserva voluntariado
    $reservavoluntariado = new FormularioVoluntariado;
    $reservavoluntariado->nombre = $request->input('nombre_voluntario');
    $reservavoluntariado->correo = $request->input('correo_voluntario');
    $reservavoluntariado->telefono = $request->input('telefono_voluntario');
    $reservavoluntariado->motivo = $request->input('motivo_voluntario');
    $reservavoluntariado->estado = 'Sin leer';



    //save message
    $reservavoluntariado->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/tramites')->with('success','Formulario enviado con éxito.');
  }

  public function index()
  {
    if(Auth::guard('admin')->check()){
      $formularios = FormularioVoluntariado::orderBy('id_voluntariado', 'desc')->paginate(100);
      return view('adminformvoltabla')->with('formularios', $formularios);
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }

  public function destroy($id)
  {
    if(Auth::guard('admin')->check()){
      $formulario = FormularioVoluntariado::find($id);
      $formulario->delete();
        
      return redirect('/admin/formvol')->with('success', 'El formulario se ha eliminado correctamente.');
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }

  public function update(Request $request, $id){

    $formulario = FormularioVoluntariado::find($id);

    $formulario->estado = 'Leída';

    $formulario->save();
    return redirect('/admin/formvol');

  }

  public function show($id){
    if(Auth::guard('admin')->check()){
      $formulario = FormularioVoluntariado::find($id);
      return view('adminformvol')->with('formulario', $formulario);
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }
}
