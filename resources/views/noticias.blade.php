@extends('layouts.app')
@section ('content')
  <h1>Noticias</h1>
  @if(count($noticias) > 0)
    @foreach($noticias as $noticia)
      <div class="well">
        <h3><a href="/noticias/{{ $noticia->id_noticia }}">{{ $noticia->titulo_noticia }}</a></h3>
        <small>Publicado: {{ $noticia->fecha_noticia }}</small>
        <p>{{ $noticia->descripcion_noticia }}</p>
        <a href="/noticias/{{ $noticia->id_noticia }}">Leer más</a>
      </div>
    @endforeach
    {{ $noticias->links() }}
  @else
    <br>
    <strong>No hay noticias por mostrar.</strong>
    <br>
    <br>
  @endif


{{-- <p>HIIng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script> --}}
@endsection
