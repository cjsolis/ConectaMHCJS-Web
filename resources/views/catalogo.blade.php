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

<div class="grid-container">
  <div class="grid-item">
    <strong>Titulo de pieza</strong>
    <div class="item-pieza">
      <img src="/images/carrouselinicio/banner-1.jpg" alt="Imagen1" >
    </div>
  </div>
  <div class="grid-item">
    <strong>Titulo de pieza</strong>
    <div class="item-pieza">
      <img src="/images/carrouselinicio/banner-1.jpg" alt="Imagen1" >
    </div>
  </div>
  <div class="grid-item">
    <strong>Titulo de pieza</strong>
    <div class="item-pieza">
      <img src="/images/carrouselinicio/banner-1.jpg" alt="Imagen1">
    </div>
  </div>
  <div class="grid-item">
    <strong>Titulo de pieza</strong>
    <div class="item-pieza">
      <img src="/images/carrouselinicio/banner-1.jpg" alt="Imagen1">
    </div>
  </div>
  <div class="grid-item">2</div>
  <div class="grid-item">3</div>
  <div class="grid-item">4</div>
  <div class="grid-item">5</div>
  <div class="grid-item">6</div>

</div>



@endsection
