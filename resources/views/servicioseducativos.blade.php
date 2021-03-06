@extends('layouts.app')
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

input {
 display: none;
}

label {
 display: inline-block;
 margin: 0 0 -1px;
 padding: 15px 25px;
 font-weight: 600;
 text-align: center;
 color: #bbb;
 border: 1px solid transparent;
}

label:before {
 font-family: fontawesome;
 font-weight: normal;
 margin-right: 10px;
}

label[for*='1']:before {
 content: '\f1cb';
}

label[for*='2']:before {
 content: '\f17d';
}

label[for*='3']:before {
 content: '\f16b';
}

label[for*='4']:before {
 content: '\f1a9';
}

label:hover {
 color: #888;
 cursor: pointer;
}

input:checked + label {
 color: #555;
 border: 1px solid #ddd;
 border-top: 2px solid orange;
 border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4 {
 display: block;
}

@media screen and (max-width: 650px) {
 label {
   font-size: 0;
 }

 label:before {
   margin: 0;
   font-size: 18px;
 }
}

@media screen and (max-width: 400px) {
 label {
   padding: 15px;
 }
}

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<?php

$doc_me = App\Documentos::all()->where('tipo_documento', '=', 'ME');
$contenido_re = App\ContenidoPagina::find(2);
$contenido_ae = App\ContenidoPagina::find(3);

?>

<main>
   <input id="tab1" type="radio" name="tabs" checked>
   <label for="tab1">Ruta de los Héroes</label>

   <input id="tab2" type="radio" name="tabs">
   <label for="tab2">Actividades Educativas</label>

   <input id="tab3" type="radio" name="tabs">
   <label for="tab3">Materiales Educativos</label>

   <section id="content1">
     {!! $contenido_re->texto_contenido !!}

   </section>

   <section id="content2">
      {!! $contenido_ae->texto_contenido !!}

   </section>

   <section id="content3">
     <p ALIGN="justify">Los Museos son instituciones con un carácter educativo no formal que facilitan a los públicos  el conocimiento no sólo a través de actividades sino también de materiales educativos.<br />
       <br />
       El Museo ha creado una serie de materiales educativos con el fin de facilitar al docente y al estudiante el estudio del tema de la Campaña Nacional, los cuáles se ponen a disposición de los usuarios para fines académicos.<br />
       <br />
       <strong>Materiales para descargar</strong>
        <br>
        <br>

        <div style="overflow-y:scroll;width: auto; height:300px;" >
          <table class="table table-striped table-hover">
            <tr>
                <th><strong>Nombre</strong></th>
                <th><strong>Documento</strong></th>
                @foreach($doc_me as $doc)
                        <tr>
                            <th>{{ $doc->nombre_documento }}</th>
                            <th><a href="{{ $doc->url_documento }}" target="_blank">Descargar</a></th>
                        </tr>  
                @endforeach
            </tr>
          </table>
        </div>
        <br>
        <br/>

   </section>



 </main>


@endsection
