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



<main>
   <input id="tab1" type="radio" name="tabs" checked>
   <label for="tab1">Ruta de los Héroes</label>

   <input id="tab2" type="radio" name="tabs">
   <label for="tab2">Actividades Educativas</label>

   <input id="tab3" type="radio" name="tabs">
   <label for="tab3">Materiales Educativos</label>

   <section id="content1">
     <p ALIGN="justify">
       El proyecto Ruta de los Héroes es impulsado por el Museo Histórico Cultural Juan Santamaría, con la finalidad de despertar la conciencia histórica de las comunidades existentes en el espacio geográfico transitado por el ejército expedicionario costarricense durante la guerra contra los filibusteros en los años 1856-1857. Las actividades son organizadas e impulsadas por el Museo según sea el grado de interés de las distintas comunidades. La iniciativa fue aprobada por el Consejo Superior de Educación, en la sesión ordinaria N° 2-05 del 18 de enero del 2005. Ver acuerdo.<br />
       <b>Hitos Históricos: una responsabilidad compartida</b><br /><br />
       La construcción de Hitos Históricos en comunidades que forman parte de la Ruta de los Héroes se realiza con apoyo del Museo.<br />
       Aporte del Museo:
        <ul style="margin-left:70px;">
          <li>Planos para la construcción.</li>
          <li>  Placa de referencia histórica.</li>
          <li>Placa de crédito del Museo.</li>
          <li>Publicaciones alusivas.</li>
          <li>Invitaciones y material divulgativo.</li>
        </ul>
        Comunidad:
         <ul style="margin-left:70px;">
           <li>Asignación de espacio.</li>
           <li>Construcción del hito.</li>
           <li>Placas de crédito.</li>
           <li>Organización del acto cívico.</li>
           <li>Mantenimiento del espacio.</li>
         </ul>
        Comunidades que cuentan con Hitos Históricos:
          <ul style="margin-left:70px;">
            <li>Muelle, Sarapiquí.</li>
            <li>Sardinal, Sarapiquí.</li>
            <li>La Trinidad, Sarapiquí.</li>
            <li>Muelle, San Carlos.</li>
            <li>Boca San Carlos, desembocadura en el río San Juan.</li>
            <li>MPuntarenas, Parque Victoria.</li>
            <li>Bebedero, Cañas-Guanacaste.</li>
            <li>Ciruelas, Alajuela .</li>
          </ul>
          <ul style="margin-left:70px;">
            <li>Planos para la construcción.</li>
            <li>  Placa de referencia histórica.</li>
            <li>Placa de crédito del Museo.</li>
            <li>Publicaciones alusivas.</li>
            <li>Invitaciones y material divulgativo.</li>
          </ul>
          <ul style="margin-left:70px;">
            <li>Planos para la construcción.</li>
            <li>  Placa de referencia histórica.</li>
            <li>Placa de crédito del Museo.</li>
            <li>Publicaciones alusivas.</li>
            <li>Invitaciones y material divulgativo.</li>
          </ul>
     </p>

   </section>

   <section id="content2">
     <div style="overflow-y:scroll;height:300px;width: 800px; margin-left:200px; height:600px;" >
         {!! Form::open(['url' => 'contact/submit']) !!}
             <div class="form-group" style="width:500px;">
               {{Form::label('name', 'Nombre')}}
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


 </main>


@endsection
