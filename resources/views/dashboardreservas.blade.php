@extends('layouts.dashboardreservaslayout')
@section ('content')
<style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

    *, *:before, *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    h1 {
        padding: 50px 0;
        font-weight: 400;
        text-align: center;
    }

    p {
        margin: 0 0 20px;
        line-height: 1.5;
    }

    main {
        min-width: 920px;
        max-width: 900px;
        padding: 50px;
        margin: 0 auto;
        background: #fff;
    }

    section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #ddd;
    }

    .custom-radio{
        display:none;
    }

    .custom-radio:checked + label {
        color: #555;
        border: 1px solid #ddd;
        border-top: 2px solid black;
        border-bottom: 1px solid #fff;
    }

    .custom-label {
        display: inline-block;
        margin: 0 0 -1px;
        padding: 15px 25px;
        font-weight: 600;
        text-align: center;
        color: #bbb;
        border: 1px solid transparent;
    }

    .custom-label:before {
        font-family: fontawesome;
        font-weight: normal;
        margin-right: 10px;
    }


    .custom-label:hover {
        color: #888;
        cursor: pointer;
    }

    #tab1:checked ~ #content1,
    #tab2:checked ~ #content2 {
        display: block;
    }

    .custom-textfield{
        width: 100%;
        font-size:18px;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

</style>





<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<?php
$userId = Auth::id();//id unico del usuario logueado.
$datostablareservas = App\ReservaVisitaGuiada::all()->where('id_usuario','=',$userId);

//echo $userId;
$datoporidusuario = App\User::find($userId);
//$formularios = App\ReservaVisitaGuiada::orderBy('id_reserva', 'desc')->where('id_usuario','=',$userId);
//echo $datoporidusuario
//echo $datostablareservas

?>


@if(count($datostablareservas)>0)
    <table>
      <tr>
        <th>Número reserva</th>
        <th>Institución</th>
        <th>Personas</th>
        <th>Rango de edad</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Materiales Educativos</th>
        <th>Necesidades Especiales</th>
        <th>Teléfono</th>

        </tr>
  @foreach($datostablareservas as $datos)
      <tr>
        <td>{{$datos->id_reserva}}</td>
        <td>{{$datos->institucion}}</td>
        <td>{{$datos->numpersonas}}</td>
        <td>{{$datos->rangoedad}}</td>
        <td>{{$datos->fecha}}</td>
        <td>{{$datos->hora}}</td>
        <td>{{$datos->materialeseducativos}}</td>
        <td>{{$datos->necesidadesespeciales}}</td>
        <td>{{$datos->telefono}}</td>
      </tr>
  @endforeach
  </table>
@else
    No hay reservas para este usuario.
@endif
@endsection
