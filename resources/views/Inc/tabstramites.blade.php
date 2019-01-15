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
     <p ALIGN="justify">
     Documentos de relevancia:
     </p>
     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FCuenta-bancaria-Banco-Nacio.jpg?alt=media&token=92f04ac6-7fd5-49aa-a4c4-09a678e47ccf" download="acta7612015.pdf">
     Cuenta bancaria Banco Nacional colones MHCJS
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FReglamento%20para%20pr%C3%A9stamo%20y%20uso%20de%20espacios%20MHCJS.pdf?alt=media&token=84c86950-f429-49d6-ab12-dd13fa8dfcee" download="acta7612015.pdf">
     Reglamento de préstamo y uso de espacios MHCJS
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FRequisitos%20de%20uso%20de%20espacios.pdf?alt=media&token=b954d0f2-b9fc-4a2e-b0e8-8aaaec232444" download="acta7612015.pdf">
     Requisito de uso de Espacios
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FCanon%20de%20mantenimiento%20MHCJS%202015.pdf?alt=media&token=ff554927-987c-46c1-bc90-acf63a64a2e7" download="acta7612015.pdf">
     Canon de mantenimiento MHCJS 2015
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FFicha%20Tecnicas%20Auditorio%20JRMP-2015.doc?alt=media&token=6f30970d-29ca-4c5a-829e-aeeaad5a6739" download="acta7612015.pdf">
     Ficha técnica del Auditorio Juan Rafael Mora Porras MHCJS
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FFicha%20Tecnica%20Salas%20Educativas-2015.doc?alt=media&token=61890b1b-0095-468f-9ca3-c8248d93ed91" download="acta7612015.pdf">
     Ficha técnica Salas Educativas
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FEquipo%20y%20mobiliario%20del%20Auditorio%20Juan%20Rafael%20Mora%20Porras.pdf?alt=media&token=968e6d28-56c0-4179-ad8e-ac947d4fe11d" download="acta7612015.pdf">
     Equipo y mobiliario del Auditorio Juan Rafael Mora Porras
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FMobiliario%20de%20salas%20educativas.pdf?alt=media&token=152f4336-c12b-471b-83ae-a304b4be9db8" download="acta7612015.pdf">
     Mobiliario de Salas educativas
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FCarta%20de%20Compromiso.doc?alt=media&token=6bbbd38f-a0ee-479b-8559-875aba86853e" download="acta7612015.pdf">
     Carta de Compromiso
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FLista%20de%20ingreso%20de%20materiales.doc?alt=media&token=95bb4496-6e08-428e-aea9-a0ff1e1720d6" download="acta7612015.pdf">
     Lista de ingreso de materiales
     </a>

     <br>
     <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FLista%20de%20ingreso%20de%20personas.doc?alt=media&token=22c8fd2f-573f-421d-8217-e3f4db79c804" download="acta7612015.pdf">
     Lista de ingreso de personas
     </a> 
     <br>
     <br>




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
   </section>

   <section id="content3">
     <p ALIGN="justify" >
       El Museo Histórico Cultural Juan Santamaría ha realizado una amplia labor editorial, con la publicación de gran cantidad de obras relativas a temas como la Campaña Nacional, historia de Costa Rica, historia de Alajuela, entre otras. Con esta labor, el Museo impulsa la difusión de nuevas investigaciones de gran calidad para ampliar el conocimiento sobre los temas mencionados. Autores de investigaciones tiene la posibilidad de proponer a la Comisión Editorial del Museo sus obras, para ser evaluadas y editadas por esta institución.
     </p>

   </section>

   <section id="content4">

    <h1 id="títuloDescargaDocumentos">Descarga de Documentos</h1>
    <br />
      <strong>2015</strong>
    <br/>

    <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FModificacion-01-2016.xlsx?alt=media&token=70cef8c1-5d9a-4bd6-8d98-3974678f7508" download="acta7612015.pdf">
    Informe de Ejecución del Presupuesto - Evaluación del Plan Operativo Institucional 2015
    </a>

    <br />
      <strong>2016</strong>
    <br/>

    <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FPLAN-ESTRATEGICO-2016-2020.pdf?alt=media&token=99e0ce3a-2360-40e6-8be9-69bfe660b8a4" download="acta7612015.pdf">
    Plan Estratégico 2016-2020
    </a>

    <br/>

    <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FPlan-de-compras-2016.xlsx?alt=media&token=7616f3d4-406a-4225-80cb-e6443c3535b7" download="acta7612015.pdf">
    Plan de compras 2016
    </a>

    <br/>

    <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FModificacion-01-2016.xlsx?alt=media&token=70cef8c1-5d9a-4bd6-8d98-3974678f7508" download="acta7612015.pdf">
    Modificación al plan de compras 01-2016
    </a>

    <br/>

    <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FModificacion-02-2016.xlsx?alt=media&token=b712911e-a065-4ae6-8529-2087cde650c1" download="acta7612015.pdf">
    Modificación al plan de compras 02-2016
    </a>

    <br />
      <strong>2017</strong>
    <br/>

    <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FPresupuesto-POI-2017.pdf?alt=media&token=3b1856b7-56e9-4645-b73c-b4149062a287" download="acta7612015.pdf">
    Presupuesto Ordinario - Plan Operativo Institucional 2017
    </a>

   </section>
