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
    <strong> Administrar Noticias </strong><br><br>
    <input id="tab1" type="radio" class="custom-radio" name="tabs" checked>
    <label for="tab1" class="custom-label">Añadir Noticias</label>

    <input id="tab2" type="radio" class="custom-radio" name="tabs">
    <label for="tab2" class="custom-label">Eliminar Noticias</label>

    <input id="tab3" type="radio" class="custom-radio" name="tabs">
    <label for="tab3" class="custom-label">Modificar Noticias</label>

    <section id="content1">
        
        <!-- <label id="solurlimg">Título de la Noticia:</label><br>
        <input type="text" name="newstitle" class="custom-textfield"><br><br>

        <label id="solurlimg">Descripción de la Noticia:</label><br>
        <textarea name="newsdescription" class="custom-textarea"></textarea><br><br>

        <label id="solurlimg">Contenido de la Noticia:</label><br>
        <input type="text" name="newscontent" class="custom-textarea2"><br><br>
        <button type="button">Agregar</button> -->

        <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
            {!! Form::open(['url' => 'admin/noticias/EnviarNoticia']) !!}
                <div class="form-group" style="width:500px;">
                {{Form::label('titulo_noticia', 'Título de la Noticia:')}}
                {{Form::text('titulo_noticia', '',['class' => 'form-control','placeholder'=> 'Título de la Noticia'])}}
                </div>

                <div class="form-group" style="width:500px;">
                {{Form::label('descripcion_noticia', 'Descripción de la Noticia:')}}
                {{Form::textarea('descripcion_noticia', '',['class' => 'form-control','placeholder'=> 'Descripción de la Noticia'])}}
                </div>

                <div class="form-group" style="width:500px;">
                {{Form::label('contenido_noticia', 'Contenido de la Noticia:')}}
                {{Form::textarea('contenido_noticia', '',['class' => 'form-control','placeholder'=> 'Contenido de la Noticia'])}}
                </div>
                <div>
                {{Form::submit('Añadir',['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>

    </section>

    <section id="content2">
        
        <p> Under construction </p>

    </section>

    <section id="content3">
        
        <p> Under construction </p>

    </section>

</main>
@endsection