<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormularioUsoEspacios;

class FormularioUsoEspaciosController extends Controller
{
  public function EnviarUsoEspacios(Request $request){
    //return $request->input('name');
    //obliga a que los campos de name y email se llenen,
    //si no no hace submit.
    $this->validate($request, [
      'nombre_uso_de_espacios'=> 'required',
      'correo_uso_de_espacios'=> 'required|email',
      'telefono_uso_de_espacios'=> 'required|integer|min:1',
      'fecha_uso_de_espacios'=>'required',
      'motivo_uso_de_espacios'=>'required',

    ]);
    //  return 123;
    //create new reserva espacio
    $reservausoespacios = new FormularioUsoEspacios;
    $reservausoespacios->nombre = $request->input('nombre_uso_de_espacios');
    $reservausoespacios->correo = $request->input('correo_uso_de_espacios');
    $reservausoespacios->telefono = $request->input('telefono_uso_de_espacios');
    $reservausoespacios->institucion = $request->input('institucion_usoespacios');
    $reservausoespacios->fecha = $request->input('fecha_uso_de_espacios');
    $reservausoespacios->motivo = $request->input('motivo_uso_de_espacios');



    //save message
    $reservausoespacios->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Formulario enviado con éxito.');

  /*  public function getMessages(){
      $messages = Message::all();
      return view('messages')->with('messages',$messages);
    }*/
  }

  public function index()
  {
    $formularios = FormularioUsoEspacios::orderBy('id_usoespacios', 'desc')->paginate(4);
    return view('adminformue')->with('formularios', $formularios);
  }

  public function destroy($id)
  {
    $formulario = FormularioUsoEspacios::find($id);
    $formulario->delete();
       
    return redirect('/admin/formue')->with('success', 'El formulario se ha eliminado correctamente.');
  }
}
