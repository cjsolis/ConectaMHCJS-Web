@extends('layouts.app')
@section ('content')

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-column-gap: 10px;
  grid-row-gap: 10px;
  background-color: white;
  width:100%;
}
.grid-item {
  background-color: #AC4B5A;
  text-align: center;
  justify-self: center;
}

a {
  color: white;
}

a:hover{
  text-decoration: none;
  color: #FAAC18;
}

.item-pieza{
  width:100%;
  text-align: center;
}

.image-container{
    background-size: cover;
    background-position: center;
    height: 240px;
    width: 240px;
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
              <a href="/catalogo/{{$pieza->id_pieza}}"><div class="image-container" style="background-image:url({{$pieza->url_img_pieza}});">
            </div></a>
          </div>
        </div>
      @endforeach
    @else
      <p>No hay piezas por mostrar. <p>
    @endif
  </div>
</div>



@endsection
