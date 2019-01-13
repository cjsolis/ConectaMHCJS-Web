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
         {!! Form::open(['url' => 'contact/submit']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('name', 'Nombre')}}
               {{Form::text('name', '',['class' => 'form-control','placeholder'=> 'Nombre'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('email', 'Correo electrónico')}}
               {{Form::text('email', '',['class' => 'form-control','placeholder'=> 'Correo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('telefono', 'Teléfono')}}
               {{Form::text('telefono', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('institucion', 'Institución(opcional)')}}
               {{Form::text('institucion', '',['class' => 'form-control','placeholder'=> 'Institución'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('personas', 'Cantidad de personas')}}
               {{Form::text('personas', '',['class' => 'form-control','placeholder'=> 'Cantidad de personas'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('fecha', 'Fecha')}}
               {{Form::text('fecha', '',['class' => 'form-control','placeholder'=> 'Fecha'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('hora', 'Hora')}}
               {{Form::text('hora', '',['class' => 'form-control','placeholder'=> 'Hora'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('motivo', 'Motivo')}}
               {{Form::text('motivo', '',['class' => 'form-control','placeholder'=> 'Motivo'])}}
             </div>
             <div>
               {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
             </div>
         {!! Form::close() !!}
     </div>
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
         {!! Form::open(['url' => 'contact/submit']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('name', 'Nombre')}}
               {{Form::text('name', '',['class' => 'form-control','placeholder'=> 'Nombre'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('email', 'Correo electrónico')}}
               {{Form::text('email', '',['class' => 'form-control','placeholder'=> 'Correo'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('telefono', 'Teléfono')}}
               {{Form::text('telefono', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('institucion', 'Institución(opcional)')}}
               {{Form::text('institucion', '',['class' => 'form-control','placeholder'=> 'Institución'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('personas', 'Cantidad de personas')}}
               {{Form::text('personas', '',['class' => 'form-control','placeholder'=> 'Cantidad de personas'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('fecha', 'Fecha')}}
               {{Form::text('fecha', '',['class' => 'form-control','placeholder'=> 'Fecha'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('hora', 'Hora')}}
               {{Form::text('hora', '',['class' => 'form-control','placeholder'=> 'Hora'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('motivo', 'Motivo')}}
               {{Form::text('motivo', '',['class' => 'form-control','placeholder'=> 'Motivo'])}}
             </div>

             <div>
               {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
             </div>
         {!! Form::close() !!}
     </div>
   </section>

   <section id="content3">
     <p ALIGN="justify" >
       El Museo Histórico Cultural Juan Santamaría ha realizado una amplia labor editorial, con la publicación de gran cantidad de obras relativas a temas como la Campaña Nacional, historia de Costa Rica, historia de Alajuela, entre otras. Con esta labor, el Museo impulsa la difusión de nuevas investigaciones de gran calidad para ampliar el conocimiento sobre los temas mencionados. Autores de investigaciones tiene la posibilidad de proponer a la Comisión Editorial del Museo sus obras, para ser evaluadas y editadas por esta institución.
     </p>

   </section>

   <section id="content4">
     <p ALIGN="justify">
       Se adjuntan descargables.
       <br />
       <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/hola123.pdf?alt=media&token=b930caa1-836e-4301-91cb-81786fd7f178" download="ACTA7615">
       Informe de Ejecución del Presupuesto - Evaluación del Plan Operativo Institucional 2015
       </a>
       <br />
       <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/hola123.pdf?alt=media&token=b930caa1-836e-4301-91cb-81786fd7f178" download="ACTA7615">
       Plan Estratégico 2016-2020
       </a>
       <br />
       <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/hola123.pdf?alt=media&token=b930caa1-836e-4301-91cb-81786fd7f178" download="ACTA7615">
       Plan de compras 2016
       </a>
       <br />
       <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/hola123.pdf?alt=media&token=b930caa1-836e-4301-91cb-81786fd7f178" download="ACTA7615">
       Modificación al plan de compras 01-2016
       </a>
       <br />
       <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/hola123.pdf?alt=media&token=b930caa1-836e-4301-91cb-81786fd7f178" download="ACTA7615">
       Modificación al plan de compras 02-2016
       </a>
       <br />
       <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/hola123.pdf?alt=media&token=b930caa1-836e-4301-91cb-81786fd7f178" download="ACTA7615">
       Presupuesto Ordinario - Plan Operativo Institucional 2017
       </a>

     </p>

   </section>
