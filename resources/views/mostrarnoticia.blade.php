@extends('layouts.app')
@section ('content')

    <h1>{{$noticia->titulo_noticia}}</h1>
    <small>Publicado: {{ $noticia->fecha_noticia }}</small><br><br>
    <p>{{ $noticia->descripcion_noticia }}</p>
    <p>{{ $noticia->contenido_noticia }}</p>

    <br>
    <br>
@endsection
