<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaVisitaGuiada;
use Illuminate\Support\Facades\DB;

class FormularioReservaVisitaGuiadaController extends Controller
{
  public function Enviar(Request $request){
    //return $request->input('name');
    //obliga a que los campos de name y email se llenen,
    //si no no hace submit.
    /*$this->validate($request, [
      'telefono'=> 'required',
      'personas'=>'required',
      'rango'=>'required',
      'fecha'=>'required',
      'hora'=>'required',
      'materialeseducativos'=>'required',
      'necesidadesespeciales'=>'required',


    ]);*/
    //  return 123;
    //create new ReservaVisitaGuiada
    $reservavisita = new ReservaVisitaGuiada;
    $reservavisita->id_usuario=1;
    $reservavisita->institucion = $request->input('institucion');
    $reservavisita->numpersonas = $request->input('personas');
    $reservavisita->rangoedad = $request->input('rango');
    $reservavisita->fecha = $request->input('fecha');
    $reservavisita->hora = $request->input('hora');
    $reservavisita->materialeseducativos = $request->input('materialeseducativos');
    $reservavisita->necesidadesespeciales = $request->input('necesidadesespeciales');
    $reservavisita->telefono = $request->input('telefono');

    //save message
    $reservavisita->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Message Sent');

  /*  public function getMessages(){
      $messages = Message::all();
      return view('messages')->with('messages',$messages);
    }*/


  }
}
