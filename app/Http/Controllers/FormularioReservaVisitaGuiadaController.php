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
    $this->validate($request, [
      'telefono_visitaguiada'=> 'required|integer|min:1',
      'personas_visitaguiada'=>'required|integer|min:1',
      'rango_visitaguiada'=>'required',
      'fecha_visitaguiada'=>'required',
      'hora_visitaguiada'=>'required',
      'materialeseducativos_visitaguiada'=>'required',
      'necesidadesespeciales_visitaguiada'=>'required',


    ]);
    //  return 123;
    //create new ReservaVisitaGuiada
    $reservavisita = new ReservaVisitaGuiada;
    $reservavisita->id_usuario=1;
    $reservavisita->institucion = $request->input('institucion_visitaguiada');
    $reservavisita->numpersonas = $request->input('personas_visitaguiada');
    $reservavisita->rangoedad = $request->input('rango_visitaguiada');
    $reservavisita->fecha = $request->input('fecha_visitaguiada');
    $reservavisita->hora = $request->input('hora_visitaguiada');
    $reservavisita->materialeseducativos = $request->input('materialeseducativos_visitaguiada');
    $reservavisita->necesidadesespeciales = $request->input('necesidadesespeciales_visitaguiada');
    $reservavisita->telefono = $request->input('telefono_visitaguiada');

    //save message
    $reservavisita->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Message Sent');

  /*  public function getReservaUsuario(Request $idusuario){
      $datosusuario = DB::table('reserva_visita_guiadas')->where('id_usuario', 1)->get();

      return view('messages')->with('messages',$messages);
    }*/



  }
}
