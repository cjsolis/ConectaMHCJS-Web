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
    #tab2:checked ~ #content2{
        display: block;
    }

    .custom-textfield{
        width: 100%;
        font-size:18px;
    }

    .custom-textarea{
        width: 100%;
        font-size:18px;
        height: 100px;
    }

    .custom-textarea2{
        width: 100%;
        font-size:18px;
        height: 600px;
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<main>
    <strong> Editar Pieza </strong><br><br>

    <div>
        {!! Form::open(['url' => ['admin/catalogo', $pieza->id_pieza], 'method' => 'POST']) !!}
            {{Form::hidden('_method', 'PUT')}}
            <div class="form-group">
                {{Form::label('nombre_pieza', 'Título de la Noticia:')}}
                {{Form::text('nombre_pieza', $pieza->nombre_pieza,['class' => 'form-control','placeholder'=> 'Título de la Noticia'])}}
            </div>

            <div class="form-group">
                {{Form::label('descripcion_pieza', 'Descripción de la Noticia:')}}
                {{Form::textarea('descripcion_pieza', $pieza->descripcion_pieza, ['class' => 'form-control','placeholder'=> 'Descripción de la Pieza'])}}
            </div>
            <div class="form-group">
                {{Form::label('url_imagen_pieza', 'Contenido de la Noticia:')}}
                {{Form::text('url_imagen_pieza', $pieza->url_img_pieza, ['class' => 'form-control','placeholder'=> 'Dirección url de imagen'])}}
            </div>
            <div class="form-group">
                {{Form::submit('Editar', ['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>

</main>
@endsection