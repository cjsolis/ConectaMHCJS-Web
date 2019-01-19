@extends('layouts.adminlayout')
@section ('content')
<style>
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
<?php

$datosusuario = App\ReservaVisitaGuiada::all();

 ?>
<table>
  <tr>
    <th>Númesro reserva</th>
    <th>Id usuario</th>
    <th>Institución</th>
    <th>Personas</th>
    <th>Rango de edad</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Materiales Educativos</th>
    <th>Necesidades Especiales</th>
    <th>Teléfono</th>

  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
    <td>Alfreds Futterkiste</td>
    <td>Alfreds Futterkiste</td>
    <td>Alfreds Futterkiste</td>
    <td>Alfreds Futterkiste</td>
    <td>Alfreds Futterkiste</td>
    <td>Alfreds Futterkiste</td>
  </tr>

</table>
@endsection
