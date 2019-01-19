@extends('layouts.app')
@section ('content')

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: white;
  padding: 10px;
  width:100%;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.item-pieza{
  width:100%;
}
</style>



<h1>Catálogo de Piezas</h1>
<div style="overflow-y:scroll;width: auto; height:700px;" >
  <div class="grid-container">
    @if(count($piezas) > 0)
      @foreach($piezas as $pieza)
        <div class="grid-item">
          <strong><a href="/catalogo/{{$pieza->id_pieza}}">{{$pieza->nombre_pieza}}</a></strong>
          <div class="item-pieza">
            <a href="/catalogo/{{$pieza->id_pieza}}"><img src="{{$pieza->url_img_pieza}}" alt="Imagen1"></a>
          </div>
        </div>
      @endforeach
    @else
      <p>No hay piezas por mostrar. <p>
    @endif
  </div>
</div>



@endsection
