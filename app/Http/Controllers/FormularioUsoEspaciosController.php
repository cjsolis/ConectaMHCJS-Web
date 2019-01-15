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
      'nombre_usoespacios'=> 'required',
      'correo_usoespacios'=> 'required',
      'telefono_usoespacios'=> 'required',
      'personas_usoespacios'=>'required',
      'fecha_usoespacios'=>'required',
      'hora_usoespacios'=>'required',
      'motivo_usoespacios'=>'required',

    ]);
    //  return 123;
    //create new reserva espacio
    $reservausoespacios = new FormularioUsoEspacios;
    $reservausoespacios->nombre = $request->input('nombre_usoespacios');
    $reservausoespacios->correo = $request->input('correo_usoespacios');
    $reservausoespacios->telefono = $request->input('telefono_usoespacios');
    $reservausoespacios->institucion = $request->input('institucion_usoespacios');
    $reservausoespacios->numpersonas = $request->input('personas_usoespacios');
    $reservausoespacios->fecha = $request->input('fecha_usoespacios');
    $reservausoespacios->hora = $request->input('hora_usoespacios');
    $reservausoespacios->motivo = $request->input('motivo_usoespacios');



    //save message
    $reservausoespacios->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Message Sent');

  /*  public function getMessages(){
      $messages = Message::all();
      return view('messages')->with('messages',$messages);
    }*/
  }
}
