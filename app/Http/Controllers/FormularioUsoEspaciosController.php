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
      'nombre'=> 'required',
      'correo'=> 'required',
      'telefono'=> 'required',
      'personas'=>'required',
      'fecha'=>'required',
      'hora'=>'required',
      'motivo'=>'required',


    ]);
    //  return 123;
    //create new reserva espacio
    $reservausoespacios = new FormularioUsoEspacios;
    $reservausoespacios->nombre = $request->input('nombre');
    $reservausoespacios->correo = $request->input('correo');
    $reservausoespacios->telefono = $request->input('telefono');
    $reservausoespacios->institucion = $request->input('institucion');
    $reservausoespacios->numpersonas = $request->input('personas');
    $reservausoespacios->fecha = $request->input('fecha');
    $reservausoespacios->hora = $request->input('hora');
    $reservausoespacios->motivo = $request->input('motivo');



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
