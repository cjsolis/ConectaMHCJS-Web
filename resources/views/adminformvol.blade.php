@extends('layouts.adminlayout')
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
    #tab2:checked ~ #content2,
    #tab3:checked ~ #content3 {
        display: block;
    }

    .custom-textfield{
        width: 100%;
        font-size:18px;
    }

    .custom-textarea{
        width: 100%;
        font-size:18px;
        height: 200px;
    }

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<main>

        <div class="well">
            <h3>Nombre del Solicitante:</h3>
            <p> {{ $formulario->nombre }} </p>
            <h3>Correo electrónico del solicitante:</h3>
            <p>{{ $formulario->correo }}</p>
            <h3>Número telefónico del solicitante:</h3>
            <p>{{ $formulario->telefono }}</p>
            <h3>Motivo del solicitante: </h3>
            <p>{{ $formulario->motivo }}</p>
            @if($formulario->estado == 'Sin leer')
                {!! Form::open(['url' => ['/admin/formvol/update', $formulario->id_voluntariado], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Leído',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            @else
                {!! Form::open(['url' => '/admin/formvol/', 'method' => 'GET']) !!}
                    {{Form::submit('Volver',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            @endif 
        </div>

</main>
@endsection
