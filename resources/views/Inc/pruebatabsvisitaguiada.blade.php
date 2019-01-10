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
   <label for="tab1">Información General</label>

   <input id="tab2" type="radio" name="tabs">
   <label for="tab2">Formulario de Solicitud</label>


   <section id="content1">
     <p >
       <ol >
          <li>La visita guiada es el recorrido guiado por las salas de exhibición del Museo.</li>
          <li>A petición del organizador de la visita, se puede incluir:
            El organizador de la gira elegirá el tema de la Campaña Nacional que más le interese profundizar: personajes, aspecto económico, aspecto militar, aspecto social o bien alguna fase de la gesta heroica en particular.</li>
            <ul style="margin-left:70px;">
              <li>Recorrido por salas de historia de la Campaña Nacional.</li>
              <li>Una charla sobre un tema de historia de la Campaña Nacional.</li>
              <li>Proyección de video infantil “Juan el Héroe” (especialmente recomendado para niños desde prekinder hasta tercer grado).</li>
              <li>Un recorrido por las instalaciones del Museo (Antiguo Cuartel de Armas y Antigua Cárcel).</li>
              <li>Un recorrido por las exhibiciones temporales que se encuentren en ese momento. </li>
            </ul>

          <li>El tiempo del recorrido dependerá del interés en la profundización del tema así como de la edad de los visitantes.</li>
          <li>El cupo máximo para la charla y proyección es de 181 personas.</li>
          <li>El cupo máximo para el recorrido por las salas y edificio es de 30 personas. Si el grupo es más grande se subdividirá en  más subgrupos y el tiempo total de la visita se extenderá.</li>
          <li>Se recomienda que los grupos no traigan bolsos o salveques grandes para realizar el recorrido por las salas. </li>
       </ol>


     <p>
       Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
       Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.

     </p>
   </section>

   <section id="content2">
     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'contact/submit']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('name', 'Name')}}
               {{Form::text('name', '',['class' => 'form-control','placeholder'=> 'Enter name'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('email', 'E-mail Address')}}
               {{Form::text('email', '',['class' => 'form-control','placeholder'=> 'Enter email'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('message', 'Message')}}
               {{Form::textarea('message', '',['class' => 'form-control','placeholder'=> 'Enter message'])}}
             </div>
             <div>
               {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
             </div>
         {!! Form::close() !!}
     </div>
   </section>


   </section>
