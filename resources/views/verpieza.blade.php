@extends('layouts.app')
@section ('content')

    <h1>{{$pieza->nombre_pieza}}</h1>
    <img src="{{$pieza->url_img_pieza}}"><br><br>
    {!! $pieza->descripcion_pieza !!}

    <br>
    <br>
@endsection