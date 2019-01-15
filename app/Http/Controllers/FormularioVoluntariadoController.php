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
      'nombre_voluntariado'=> 'required',
      'correo_voluntariado'=> 'required',
      'telefono_voluntariado'=> 'required',
      'personas_voluntariado'=>'required',
      'fecha_voluntariado'=>'required',
      'hora_voluntariado'=>'required',
      'motivo_voluntariado'=>'required',


    ]);
    //  return 123;
    //create new reserva voluntariado
    $reservavoluntariado = new FormularioVoluntariado;
    $reservavoluntariado->nombre = $request->input('nombre_voluntariado');
    $reservavoluntariado->correo = $request->input('correo_voluntariado');
    $reservavoluntariado->telefono = $request->input('telefono_voluntariado');
    $reservavoluntariado->institucion = $request->input('institucion_voluntariado');
    $reservavoluntariado->numpersonas = $request->input('personas_voluntariado');
    $reservavoluntariado->fecha = $request->input('fecha_voluntariado');
    $reservavoluntariado->hora = $request->input('hora_voluntariado');
    $reservavoluntariado->motivo = $request->input('motivo_voluntariado');



    //save message
    $reservavoluntariado->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Message Sent');
  }
}
