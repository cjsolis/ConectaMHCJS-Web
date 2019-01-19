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
 min-width: 820px;
 max-width: 800px;
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
<?php

$doc_ue = App\Documentos::all()->where('tipo_documento', '=', 'UE');
$doc_admin = App\Documentos::all()->where('tipo_documento', '=', 'TA');
$contenido_ue = App\ContenidoPagina::find(4);
$contenido_vol = App\ContenidoPagina::find(5);
$contenido_pub = App\ContenidoPagina::find(6);

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

   <input id="tab1" type="radio" name="tabs" checked>
   <label for="tab1">Uso de espacios</label>
   <input id="tab2" type="radio" name="tabs" >
   <label for="tab2">Voluntariado</label>
   <input id="tab3" type="radio" name="tabs" >
   <label for="tab3">Editorial</label>
   <input id="tab4" type="radio" name="tabs" >
   <label for="tab4">Administrativos</label>

   <section id="content1">

    {!! $contenido_ue->texto_contenido !!}

     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'tramites/EnviarUsoEspacios']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('nombre_usoespacios', 'Nombre completo:')}}
               {{Form::text('nombre_uso_de_espacios', '',['class' => 'form-control','placeholder'=> 'Nombre completo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('correo_usoespacios', 'Correo electrónico')}}
               {{Form::text('correo_uso_de_espacios', '',['class' => 'form-control','placeholder'=> 'Correo electrónico'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('telefono_usoespacios', 'Número telefónico')}}
               {{Form::text('telefono_uso_de_espacios', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('institucion_usoespacios', 'Institución (opcional)')}}
               {{Form::text('institucion_usoespacios', '',['class' => 'form-control','placeholder'=> 'Institución'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('fecha_usoespacios', 'Fecha')}}
               {{Form::date('fecha_uso_de_espacios', '',['class' => 'form-control','placeholder'=> 'Fecha'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('motivo_usoespacios', 'Motivo')}}
               {{Form::textarea('motivo_uso_de_espacios', '',['class' => 'form-control','placeholder'=> 'Descripción del motivo de solicitud de un espacio dentro del museo.'])}}
             </div>
             <div>
               {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
             </div>
         {!! Form::close() !!}
     </div>

    <br>
    <br>
    <strong>Documentos de relevancia</strong>
    <br>
    <br>

    <div style="overflow-y:scroll;width: auto; height:300px;" >
      <table class="table table-striped table-hover">
        <tr>
            <th><strong>Nombre</strong></th>
            <th><strong>Documento</strong></th>
            @foreach($doc_ue as $doc)
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

   <section id="content2">

      {!! $contenido_vol->texto_contenido !!}

     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'tramites/EnviarVoluntariado']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('nombre_voluntariado', 'Nombre completo:')}}
               {{Form::text('nombre_voluntario', '',['class' => 'form-control','placeholder'=> 'Nombre completo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('correo_voluntariado', 'Correo electrónico:')}}
               {{Form::text('correo_voluntario', '',['class' => 'form-control','placeholder'=> 'Correo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('telefono_voluntariado', 'Teléfono:')}}
               {{Form::text('telefono_voluntario', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('motivo_voluntariado', 'Motivo:')}}
               {{Form::textarea('motivo_voluntario', '',['class' => 'form-control','placeholder'=> 'Una breve explicación de los motivos de su solicitud de voluntariado.'])}}
             </div>

             <div>
               {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
             </div>
         {!! Form::close() !!}
     </div>
     <br>
     <br>
   </section>

   <section id="content3">
     {!! $contenido_pub->texto_contenido !!}

   </section>

   <section id="content4">

    <strong>Descarga de Documentos</strong>
    <br>
    <br>

    <div style="overflow-y:scroll;width: auto; height:300px;" >
      <table class="table table-striped table-hover">
        <tr>
            <th><strong>Nombre</strong></th>
            <th><strong>Fecha (yyyy-mm-dd)</strong></th>
            <th><strong>Documento</strong></th>
            @foreach($doc_admin as $doc)
                    <tr>
                        <th>{{ $doc->nombre_documento }}</th>
                        <th>{{ $doc->fecha_documento }}</th>
                        <th><a href="{{ $doc->url_documento }}" target="_blank">Descargar</a></th>
                    </tr>  
            @endforeach
        </tr>
      </table>
    </div>
    <br>
    <br/>

   </section>
