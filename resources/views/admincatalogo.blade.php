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
    <strong> Administrar Catálogo de Piezas </strong><br><br>
    <input id="tab1" type="radio" class="custom-radio" name="tabs" checked>
    <label for="tab1" class="custom-label">Añadir Piezas</label>

    <input id="tab2" type="radio" class="custom-radio" name="tabs">
    <label for="tab2" class="custom-label">Eliminar Piezas</label>

    <input id="tab3" type="radio" class="custom-radio" name="tabs">
    <label for="tab3" class="custom-label">Modificar Piezas</label>

    <section id="content1">

        <label id="solurlimg">Nombre de la Pieza:</label><br>
        <input type="text" name="piecename" class="custom-textfield"><br><br>

        <label id="solurlimg">Nombre de Categoría:</label><br>
        <input type="text" name="piececategory" class="custom-textfield"><br><br>

        <label id="solurlimg">Descripción de la Pieza:</label><br>
        <textarea name="piecedescription" class="custom-textarea"></textarea><br><br>

        <label id="solurlimg">Dirección url de la imagen de la Pieza:</label><br>
        <input type="text" name="pieceimgurl" class="custom-textfield"><br><br>
        <button type="button">Agregar</button>

    </section>

    <section id="content2">

        <p> Under construction </p>

    </section>

    <section id="content3">

        <p> Under construction </p>

    </section>

</main>
@endsection
