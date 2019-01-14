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
    /*$this->validate($request, [
      'nombre'=> 'required',
      'correo'=> 'required',
      'telefono'=> 'required',
      'personas'=>'required',
      'fecha'=>'required',
      'hora'=>'required',
      'motivo'=>'required',


    ]);*/
    //  return 123;
    //create new reserva voluntariado
    $reservavoluntariado = new FormularioVoluntariado;
    $reservavoluntariado->nombre = $request->input('nombre');
    $reservavoluntariado->correo = $request->input('correo');
    $reservavoluntariado->telefono = $request->input('telefono');
    $reservavoluntariado->institucion = $request->input('institucion');
    $reservavoluntariado->numpersonas = $request->input('personas');
    $reservavoluntariado->fecha = $request->input('fecha');
    $reservavoluntariado->hora = $request->input('hora');
    $reservavoluntariado->motivo = $request->input('motivo');



    //save message
    $reservavoluntariado->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Message Sent');
  }
}
