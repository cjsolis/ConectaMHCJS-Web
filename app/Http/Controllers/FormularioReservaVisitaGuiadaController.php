<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaVisitaGuiada;
use Illuminate\Support\Facades\DB;
use Auth;

class FormularioReservaVisitaGuiadaController extends Controller
{
  public function Enviar(Request $request){
    //return $request->input('name');
    //obliga a que los campos de name y email se llenen,
    //si no no hace submit.
    $this->validate($request, [
      'telefono_del_solicitante'=> 'required|integer|min:8',
      'cantidad_de_personas'=>'required|integer',
      'rango_de_edad'=>'required',
      'fecha_de_visita'=>'required|unique:reserva_visita_guiadas,fecha',



    ]);
    //  return 123;
    //create new ReservaVisitaGuiada
    $reservavisita = new ReservaVisitaGuiada;
    $reservavisita->id_usuario=Auth::id();
    $reservavisita->institucion = $request->input('institucion_del_visitante');
    $reservavisita->numpersonas = $request->input('cantidad_de_personas');
    $reservavisita->rangoedad = $request->input('rango_de_edad');
    $reservavisita->fecha = $request->input('fecha_de_visita');
    $reservavisita->materialeseducativos = $request->input('materialeseducativos_visitaguiada');
    $reservavisita->necesidadesespeciales = $request->input('necesidadesespeciales_visitaguiada');
    $reservavisita->telefono = $request->input('telefono_del_solicitante');
    $reservavisita->estado = 'Pendiente';

    //save message
    $reservavisita->save();

    //$values = array($reservavisita->id_usuario,$reservavisita->institucion,$reservavisita->numpersonas,$reservavisita->rangoedad,$reservavisita->fecha,$reservavisita->hora,$reservavisita->materialeseducativos,$reservavisita->necesidadesespeciales,$reservavisita->telefono);
    //DB::table('reserva_visita_guiadas')->insert($values);

    return redirect('/')->with('success','Reservación creada.');

  /*  public function getReservaUsuario(Request $idusuario){
      $datosusuario = DB::table('reserva_visita_guiadas')->where('id_usuario', 1)->get();

      return view('messages')->with('messages',$messages);
    }*/

  }

  public function index()
  {
    return view('dashboardreservas');
  }

  public function indexAdmin()
  {
    if(Auth::guard('admin')->check()){
      $reservas = ReservaVisitaGuiada::orderBy('created_at', 'desc')->paginate(4);
      return view('adminreservaciones', compact('reservas'));
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }

  public function destroyCancelar($id)
  {
    $formulario = ReservaVisitaGuiada::find($id);
    $formulario->delete();
       
    return redirect('/dashboardreservas')->with('success', 'La reserva se ha cancelado exitosamente.');
  }

  public function destroy($id)
  {
    if(Auth::guard('admin')->check()){
      $formulario = ReservaVisitaGuiada::find($id);
      $formulario->delete();
        
      return redirect('/admin/reservaciones')->with('success', 'La reserva se ha eliminado exitosamente.');
    }else{

      return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
    }
  }
}
