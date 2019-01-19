@extends('layouts.app')
@section ('content')
<style media="screen">
    .ignoreparentreserva {
        width: 100vw;
        margin-left: calc(65% - 50vw);
    }
</style>


<?php
$userId = Auth::id();//id unico del usuario logueado.
$datostablareservas = App\ReservaVisitaGuiada::all()->where('id_usuario','=',$userId);

//echo $userId;
$datoporidusuario = App\User::find($userId);
//$formularios = App\ReservaVisitaGuiada::orderBy('id_reserva', 'desc')->where('id_usuario','=',$userId);
//echo $datoporidusuario
//echo $datostablareservas
?>

<div class="ignoreparentreserva">
@if(count($datostablareservas)>0)
    <table>
      <tr>
        <th>&nbsp Número reserva &nbsp</th>
        <th>&nbsp Institución &nbsp</th>
        <th>&nbsp Personas &nbsp</th>
        <th>&nbsp Rango de edad &nbsp</th>
        <th>&nbsp Fecha &nbsp  </th>
        <th>&nbsp Hora &nbsp </th>
        <th>&nbsp Materiales Educativos  &nbsp</th>
        <th>&nbsp Necesidades Especiales &nbsp </th>
        <th>&nbsp Teléfono  &nbsp</th>

        </tr>
  @foreach($datostablareservas as $datos)
      <tr>
        <td>{{$datos->id_reserva}}</td>
        <td>&nbsp {{$datos->institucion}} &nbsp</td>
        <td> {{$datos->numpersonas}}</td>
        <td>&nbsp {{$datos->rangoedad}} &nbsp</td>
        <td>&nbsp {{$datos->fecha}} &nbsp</td>
        <td>&nbsp {{$datos->hora}} &nbsp</td>
        <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp{{$datos->materialeseducativos}} </td>
        <td>&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp{{$datos->necesidadesespeciales}} </td>
        <td>&nbsp {{$datos->telefono}}&nbsp </td>
      </tr>
  @endforeach
  </table>
@else
    No hay reservas para este usuario.
@endif
</div>
@endsection
