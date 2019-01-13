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
    $reservavisitaguiada->reservavisitaguiada = $request->input('telefono');
    $reservavisitaguiada->reservavisitaguiada = $request->input('institucion');
    $reservavisitaguiada->reservavisitaguiada = $request->input('personas');
    $reservavisitaguiada->reservavisitaguiada = $request->input('rango');
    $reservavisitaguiada->reservavisitaguiada = $request->input('fecha');
    $reservavisitaguiada->reservavisitaguiada = $request->input('hora');
    $reservavisitaguiada->reservavisitaguiada = $request->input('materialeseducativos');
    $reservavisitaguiada->reservavisitaguiada = $request->input('necesidadesespeciales');
    //save message
    $message->save();

    //redirect
    return redirect('/')->with('success','Message Sent');//return to home.

  }


/*  public function getMessages(){
    $messages = Message::all();

    return view('messages')->with('messages',$messages);
  }*/
}
