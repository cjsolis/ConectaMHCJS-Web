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
    #tab2:checked ~ #content2 {
        display: block;
    }

    .custom-textfield{
        width: 100%;
        font-size:18px;
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<main>
    <strong> Administrar Documentos </strong><br><br>
    <input id="tab1" type="radio" class="custom-radio" name="tabs" checked>
    <label for="tab1" class="custom-label">Buscar Documentos</label>

    <input id="tab2" type="radio" class="custom-radio" name="tabs">
    <label for="tab2" class="custom-label">Añadir Documentos</label>

    <section id="content2">

        <div>
            {!! Form::open(['url' => 'admin/transparencia/agregar']) !!}
                <div class="form-group">
                {{Form::label('nombre_acta', 'Nombre del Documento:')}}
                {{Form::text('nombre_acta', '',['class' => 'form-control','placeholder'=> 'Nombre del Documento'])}}
                </div>

                {{-- Quedé en meter documentos en esta sección agregando un combo box --}}
                <div class="form-group">
                    {{Form::label('tipo_documento', 'Tipo de Documento:')}}
                    {{Form::select('tipo_documento', ['AC' => 'Acta de  Transparencia', 'UE' => 'Documento sobre Uso de Espacio', 'ME' => 'Material Educativo', 'TA' => 'Documento Administrativo'], 'Acta', ['class' => 'form-control'])}}
                </div>

                <div class="form-group">
                {{Form::label('fecha_acta', 'Fecha del Documento:')}}
                {{Form::date('fecha_acta', '',['class' => 'form-control','placeholder'=> 'Fecha del Documento'])}}
                </div>

                <div class="form-group">
                {{Form::label('url_acta', 'Dirección url del Documento:')}}
                {{Form::text('url_acta', '',['class' => 'form-control','placeholder'=> 'Dirección url del Documento'])}}
                </div>

                <div>
                {{Form::submit('Añadir',['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}

        </div>

    </section>

    <section id="content1">
        
            @if(count($documentos) > 0)
            <div class="form-group">
                {!! Form::open(['method'=>'GET','url'=>'/admin/transparencia','role'=>'search'])  !!}
                    {{Form::text('search')}}
                    {{Form::submit('Buscar', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
            <div style="overflow-y:scroll;width: auto; height:500px;" >
                <table class="table table-striped table-hover">
                    <tr>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Tipo</strong></th>
                        <th></th>
                        <th></th>
                        @foreach($documentos as $documento)
                                <tr>
                                    <th>{{ $documento->nombre_documento }}</th>
                                    <th>{{ $documento->tipo_documento }}</th>
                                    <th>
                                        {!! Form::open(['url' => ['/admin/transparencia', $documento->id_documento, 'editar'], 'method' => 'GET']) !!}
                                            {{Form::submit('Editar',['class'=>'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                    </th>
                                    <th>
                                        {!! Form::open(['url' => ['/admin/transparencia', $documento->id_documento], 'method' => 'POST']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('X',['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </th>
                                </tr>  
                        @endforeach
                    </tr>
                </table>
            </div>

            <div>
                <strong>Significado de las siglas de cada tipo:</strong>
                <p>AC: Acta de Transparencia encontrada en la sección Transparencia.</p>
                <p>ME: Material Educativo encontrado en la sección Servicios->Servicios Educativos->Materiales Educativos.</p>
                <p>TA: Documento administrativo encontrado en la sección Trámites->Administrativos.</p>
                <p>UE: Documento sobre uso de espacios encontrado en la sección Trámites->Uso de espacios.</p>
            </div>

        @else
            {!! Form::open(['method'=>'GET','url'=>'/admin/transparencia','role'=>'search'])  !!}
                {{Form::text('search')}}
                {{Form::submit('Buscar',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            <br>
            <strong> No se encontraron elementos. </strong>
            <br>
            <br>
            <table class="table table-striped table-hover">
                    <tr>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Fecha</strong></th>
                        <th></th>
                        <th></th>
                    </tr>
            </table>

            <div>
                <strong>Significado de las siglas de cada tipo:</strong>
                <p>AC: Acta de Transparencia encontrada en la sección Transparencia.</p>
                <p>ME: Material Educativo encontrado en la sección Servicios->Servicios Educativos->Materiales Educativos.</p>
                <p>TA: Documento administrativo encontrado en la sección Trámites->Administrativos.</p>
                <p>UE: Documento sobre uso de espacios encontrado en la sección Trámites->Uso de espacios.</p>
            </div>
        @endif

    </section>

</main>
@endsection