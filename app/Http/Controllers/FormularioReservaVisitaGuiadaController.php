<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaVisitaGuiada;

class FormularioReservaVisitaGuiadaController extends Controller
{
  public function Enviar(Request $request){
    //return $request->input('name');
    //obliga a que los campos de name y email se llenen,
    //si no no hace submit.
    $this->validate($request, [
      'telefono'=> 'required',
      'personas'=>'required',
      'rango'=>'required',
      'fecha'=>'required',
      'hora'=>'required',
      'materialeseducativos'=>'required',
      'necesidadesespeciales'=>'required',


      ]);
    //  return 'SUCCESS';
    //create new ReservaVisitaGuiada
    $reservavisitaguiada = new ReservaVisitaGuiada;
    $reservavisitaguiada->telefono = $request->input('telefono');
    $reservavisitaguiada->institucion = $request->input('institucion');
    $reservavisitaguiada->personas = $request->input('personas');
    $reservavisitaguiada->rango = $request->input('rango');
    $reservavisitaguiada->fecha = $request->input('fecha');
    $reservavisitaguiada->hora = $request->input('hora');
    $reservavisitaguiada->materialeseducativos = $request->input('materialeseducativos');
    $reservavisitaguiada->necesidadesespeciales = $request->input('necesidadesespeciales');
    //save message
    $reservavisitaguiada->save();

    //redirect
    return redirect('/')->with('success','Message Sent');//return to home.

  }


/*  public function getMessages(){
    $messages = Message::all();

    return view('messages')->with('messages',$messages);
  }*/
}
