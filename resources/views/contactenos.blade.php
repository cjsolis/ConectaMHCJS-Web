@extends('layouts.app')
@section ('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<ul class="nav nav-tabs" style="width:1000px;">
  <li><a data-toggle="tab" href="#menu0">Directorio Interno</a></li>
  <li><a data-toggle="tab" href="#menu1">Ubicacion</a></li>
  <li><a data-toggle="tab" href="#menu2">Formulario de Contato</a></li>
</ul>

<div class="tab-content">
  <div id="menu0" class="tab-pane fade">
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
</head>
<body>

<h2>Equipo de trabajo</h2>

<table>
  <tr>
    <th>Puesto</th>
    <th>Nombre</th>
    <th>Correo</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    </tr>
  </table>
  </div>
  <div id="menu1" class="tab-pane fade">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.9979549197305!2d-84.2165296857179!3d10.017026575490526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9c4fb829e0d%3A0x34fcba852617b932!2sMuseo+Hist%C3%B3rico+Cultural+Juan+Santamar%C3%ADa!5e0!3m2!1ses!2scr!4v1547178392089" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div id="menu2" class="tab-pane fade">
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
  </div>
</div>
@endsection
