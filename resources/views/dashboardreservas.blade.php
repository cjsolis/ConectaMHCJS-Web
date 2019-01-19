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
    <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
        @foreach($datostablareservas as $datos)
            <div class="well">
                <p>Número de reserva: {{$datos->id_reserva}}</p>
                <p>Institución: {{$datos->institucion}}</p>
                <p>Cantidad de Personas: {{$datos->numpersonas}}</p>
                <p>Rango de edad: {{$datos->rangoedad}}</p>
                <p>Fecha solicitada: {{$datos->fecha}}</p>
                <p>Solicitud de materiales: {{$datos->materialeseducativos}}</p>
                <p>Solicitudes en necesidades especiales: {{$datos->necesidadesespeciales}}</p>
                <p>Número telefónico: {{$datos->telefono}}</p>
                <p>Estado: {{$datos->estado}}</p>
                {!! Form::open(['url' => ['/dashboardreservas', $datos->id_reserva], 'method' => 'POST']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Cancelar',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}                
            </div>
        @endforeach

    </div>
@else
    No hay reservas para este usuario.
@endif
</div>
@endsection
