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
   <label for="tab1">Reserva Visita Guiada</label>


   <section id="content1">
     @if(Auth::check())

     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'reservavisitaguiada/Enviar']) !!}

             <div class="form-group" style="width:500px;">
               {{Form::label('telefono_visitaguiada', 'Teléfono')}}
               {{Form::text('telefono_del_solicitante', '',['class' => 'form-control','placeholder'=> 'Teléfono'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('institucion_visitaguiada', 'Institución (opcional)')}}
               {{Form::text('institucion_del_visitante', '',['class' => 'form-control','placeholder'=> 'Ejemplo: Instituto Tecnológico de Costa Rica'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('personas_visitaguiada', 'Cantidad de personas')}}
               {{Form::text('cantidad_de_personas', '',['class' => 'form-control','placeholder'=> 'Ej: 7'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('rango_visitaguiada', 'Rango de edad (años)')}}
              </div>
              <div class="form-group" style="width:500px;">
               {{Form::label('rango_visitaguiada', 'De:')}}
               {{Form::text('rango_de_edad_menor', '',['class' => 'form-control','placeholder'=> 'Ej: 12'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('rango_visitaguiada', 'A:')}}
               {{Form::text('rango_de_edad_mayor', '',['class' => 'form-control','placeholder'=> 'Ej: 16'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('fecha_visitaguiada', 'Fecha')}}
               {{Form::date('fecha_de_visita', '',['class' => 'form-control','placeholder'=> 'Fecha'])}}
             </div>
             <div class="form-group" style="width:500px;">
               {{Form::label('materialeseducativos_visitaguiada', 'Materiales Educativos (opcional)')}}
               {{Form::textarea('materialeseducativos_visitaguiada', '',['class' => 'form-control','placeholder'=> 'Describa si necesita algún material educativo para apoyar la visita.'])}}
             </div>

             <div class="form-group" style="width:500px;">
               {{Form::label('necesidadesespeciales_visitaguiada', 'Necesidades especiales (opcional)')}}
               {{Form::textarea('necesidadesespeciales_visitaguiada', '',['class' => 'form-control','placeholder'=> 'Describa si existe alguna necesidad especial en caso de personas con discapacidad.'])}}
             </div>

             <div>
               {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
             </div>
         {!! Form::close() !!}
     </div>
     @else
          Debe iniciar sesión para enviar formularios.
     @endif
   </section>


   </section>
