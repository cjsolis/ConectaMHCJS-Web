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

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

   <input id="tab1" type="radio" name="tabs" checked>
   <label for="tab1">Uso de espacios</label>
   <input id="tab2" type="radio" name="tabs" >
   <label for="tab2">Voluntariado</label>
   <input id="tab3" type="radio" name="tabs" >
   <label for="tab3">Publicaciones</label>
   <input id="tab4" type="radio" name="tabs" >
   <label for="tab4">Administrativos</label>

   <section id="content1">
     <p ALIGN="justify" >
       El Museo cuenta con espacios educativos y culturales para el desarrollo de actividades académicas y artísticas, tanto por parte de la comunidad de Alajuela, como por todos los costarricenses. Estos espacios tienen un costo de canon de mantenimiento que debe consultarse en la documentación adjunta. Los usuarios de estos espacios deben tener en cuenta que los edificios sede del Museo: Antiguo Cuartel de Armas y Antigua Cárcel de Alajuela,  son patrimonio arquitectónico nacional, por lo cual, cualquier actividad educativa y cultural debe estar supeditada al cuido del espacio. Para realizar una solicitud de uso de espacios llene el formulario.
     </p>
     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'tramites/EnviarUsoEspacios']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('nombre_usoespacios', 'Nombre')}}
               {{Form::text('nombre_usoespacios', '',['class' => 'form-control','placeholder'=> 'Nombre'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('correo_usoespacios', 'Correo electrónico')}}
               {{Form::text('correo_usoespacios', '',['class' => 'form-control','placeholder'=> 'Correo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('telefono_usoespacios', 'Teléfono')}}
               {{Form::text('telefono_usoespacios', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('institucion_usoespacios', 'Institución(opcional)')}}
               {{Form::text('institucion_usoespacios', '',['class' => 'form-control','placeholder'=> 'Institución'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('personas_usoespacios', 'Cantidad de personas')}}
               {{Form::text('personas_usoespacios', '',['class' => 'form-control','placeholder'=> 'Cantidad de personas'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('fecha_usoespacios', 'Fecha')}}
               {{Form::text('fecha_usoespacios', '',['class' => 'form-control','placeholder'=> 'Fecha'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('hora_usoespacios', 'Hora')}}
               {{Form::text('hora_usoespacios', '',['class' => 'form-control','placeholder'=> 'Hora'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('motivo_usoespacios', 'Motivo')}}
               {{Form::text('motivo_usoespacios', '',['class' => 'form-control','placeholder'=> 'Motivo'])}}
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
     <p>El Museo Histórico Cultural Juan Santamaría le invita a formar parte de su Programa de Voluntariado. Este programa admite voluntarios de todas las especialidades, incluyendo estudiantes con Trabajo Comunal Universitario, Práctica Profesional, Horas Beca, Extranjeros y Voluntariado Independiente.<br />
        <br />
          Cuando vengan de una institución educativa oficial los estudiantes deberán presentar una carta de solicitud de aceptación de Trabajo Comunal, Práctica Profesional u Horas Beca con todos los datos del estudiante y una persona de contacto en la institución (nombre y teléfono) en caso de que se presentara algún inconveniente. Además deberá presentarse la hoja de control de horas para completar las horas laboradas cuando corresponda.<br />
          <br />
          El tipo de trabajo a realizar dependerá de la especialización del estudiante (universitario), así como de la unidad donde labore dentro del Museo. En todo caso, se promoverá la afinidad con los conocimientos con los que cuenta el voluntario así como lo que se considere conveniente para la institución.
          <br />Realice su solicitud de voluntariado:
    </p>
     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'tramites/EnviarVoluntariado']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('nombre_voluntariado', 'Nombre')}}
               {{Form::text('nombre_voluntariado', '',['class' => 'form-control','placeholder'=> 'Nombre'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('correo_voluntariado', 'Correo electrónico')}}
               {{Form::text('correo_voluntariado', '',['class' => 'form-control','placeholder'=> 'Correo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('telefono_voluntariado', 'Teléfono')}}
               {{Form::text('telefono_voluntariado', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('institucion_voluntariado', 'Institución(opcional)')}}
               {{Form::text('institucion_voluntariado', '',['class' => 'form-control','placeholder'=> 'Institución'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('personas_voluntariado', 'Cantidad de personas')}}
               {{Form::text('personas_voluntariado', '',['class' => 'form-control','placeholder'=> 'Cantidad de personas'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('fecha_voluntariado', 'Fecha')}}
               {{Form::text('fecha_voluntariado', '',['class' => 'form-control','placeholder'=> 'Fecha'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('hora_voluntariado', 'Hora')}}
               {{Form::text('hora_voluntariado', '',['class' => 'form-control','placeholder'=> 'Hora'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('motivo_voluntariado', 'Motivo')}}
               {{Form::text('motivo_voluntariado', '',['class' => 'form-control','placeholder'=> 'Motivo'])}}
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
     <p ALIGN="justify" >
       El Museo Histórico Cultural Juan Santamaría ha realizado una amplia labor editorial, con la publicación de gran cantidad de obras relativas a temas como la Campaña Nacional, historia de Costa Rica, historia de Alajuela, entre otras. Con esta labor, el Museo impulsa la difusión de nuevas investigaciones de gran calidad para ampliar el conocimiento sobre los temas mencionados. Autores de investigaciones tiene la posibilidad de proponer a la Comisión Editorial del Museo sus obras, para ser evaluadas y editadas por esta institución.
     </p>

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
