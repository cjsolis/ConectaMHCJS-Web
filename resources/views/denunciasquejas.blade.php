@extends('layouts.app')
@section ('content')
<h1>Denuncias y Quejas</h1>
<h3>Contáctenos</h3>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Nombre')}}
      {{Form::text('name', '',['class' => 'form-control','placeholder'=> 'Ingrese su nombre'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'Correo')}}
      {{Form::text('email', '',['class' => 'form-control','placeholder'=> 'Ingrese su correo'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Mensaje')}}
      {{Form::textarea('message', '',['class' => 'form-control','placeholder'=> 'Ingrese el mensaje'])}}
    </div>
    <div>
      {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection
