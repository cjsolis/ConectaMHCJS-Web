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
$datostablareservas = App\ReservaVisitaGuiada::orderBy('created_at', 'desc')->get()->where('id_usuario','=',$userId);

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
                <p>Rango de edad:</p>
                <p>De {{$datos->rangoedadmenor}} años a {{$datos->rangoedadmayor}} años.</p>
                <p>Fecha solicitada: {{$datos->fecha}}</p>
                <p>Solicitud de materiales: {{$datos->materialeseducativos}}</p>
                <p>Solicitudes en necesidades especiales: {{$datos->necesidadesespeciales}}</p>
                <p>Número telefónico: {{$datos->telefono}}</p>
                <p>Estado: {{$datos->estado}}</p>
                <p>Fecha de la realización de la solicitud: {{$datos->created_at}}</p>
                @if($datos->estado == 'Pendiente')
                    {!! Form::open(['url' => ['dashboardreservas/update', $datos->id_reserva], 'method' => 'POST']) !!}
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Cancelar',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                @else
                @endif                
            </div>
        @endforeach

    </div>
@else
    No hay reservas para este usuario.
@endif
</div>
@endsection
