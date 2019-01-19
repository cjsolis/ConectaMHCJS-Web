<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioVoluntariado;

class FormularioVoluntariadoController extends Controller
{
  public function EnviarVoluntariado(Request $request){
    //return $request->input('name');
    //obliga a que los campos de name y email se llenen,
    //si no no hace submit.
    $this->validate($request, [
      'nombre_voluntario'=> 'required',
      'correo_voluntario'=> 'required|email',
      'telefono_voluntario'=> 'required|integer|min:1',
      'motivo_voluntario'=>'required',


    ]);
    //  return 123;
    //create new reserva voluntariado
    $reservavoluntariado = new FormularioVoluntariado;
    $reservavoluntariado->nombre = $request->input('nombre_voluntario');
    $reservavoluntariado->correo = $request->input('correo_voluntario');
    $reservavoluntariado->telefono = $request->input('telefono_voluntario');
    $reservavoluntariado->motivo = $request->input('motivo_voluntario');



    //save message
    $reservavoluntariado->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Formulario enviado con éxito.');
  }

  public function index()
  {
    $formularios = FormularioVoluntariado::orderBy('id_voluntariado', 'desc')->paginate(4);
    return view('adminformvol')->with('formularios', $formularios);
  }

  public function destroy($id)
  {
    $formulario = FormularioVoluntariado::find($id);
    $formulario->delete();
       
    return redirect('/admin/formvol')->with('success', 'El formulario se ha eliminado correctamente.');
  }
}
