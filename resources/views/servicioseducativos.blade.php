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

   <section id="content3">
     <p ALIGN="justify">Los Museos son instituciones con un carácter educativo no formal que facilitan a los públicos  el conocimiento no sólo a través de actividades sino también de materiales educativos.<br />
       <br />
       El Museo ha creado una serie de materiales educativos con el fin de facilitar al docente y al estudiante el estudio del tema de la Campaña Nacional, los cuáles se ponen a disposición de los usuarios para fines académicos.<br />
       <br />
       <strong>Materiales PDF para descargar: </strong><br />

       <br>
      <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/servicios%2FConsejos%20pr%C3%A1cticos%20para%20la%20preparaci%C3%B3n%20y%20montaje%20de%20exhibiciones%20did%C3%A1cticas.pdf?alt=media&token=f7d1452e-0b16-4191-9efa-362f8cb64059" download="acta7612015.pdf">
      Consejos prácticos para la preparación y montaje de exhibiciones didácticas
      </a>

      <br>
      <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/servicios%2FUn%20camino%20a%20la%20aproximaci%C3%B3n%20de%20las%20Ciencias%20Sociales.pdf?alt=media&token=d0eaed58-3bba-4739-bad5-768eb034b84e" download="acta7612015.pdf">
      Un camino a la aproximación de las Ciencias Sociales
      </a>

      <br>
      <a href="https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/servicios%2FUnidad%20Did%C3%A1ctica%20Juan%20Santamar%C3%ADa%20Heroe%20de%20mi%20Patria.pdf?alt=media&token=a11a0267-1eca-4d3b-833e-ad54a0fee36d" download="acta7612015.pdf">
      Unidad Didáctica Juan Santamaría Heroe de mi Patria
      </a>

      <br>
      <a href="http://www.museojuansantamaria.go.cr/materiales-de-educacion/64-desplegable-batalla-de-santa-rosa.html" download="acta7612015.pdf">
      Desplegable Batalla de Santa Rosa
      </a>

      <br>
      <a href="http://www.museojuansantamaria.go.cr/materiales-de-educacion/66-desplegable-las-tres-batallas-de-rivas.html" download="acta7612015.pdf">
      Desplegable Las tres Batallas de Rivas
      </a>

      <br>
      <a href="http://www.museojuansantamaria.go.cr/materiales-de-educacion/65-desplegable-juan-rafael-mora-porras.html" download="acta7612015.pdf">
      Desplegable Juan Rafael Mora Porras
      </a>

      <br>
      <a href="http://www.museojuansantamaria.go.cr/materiales-de-educacion/60-desplegable-francisca-carrasco-jimenez.html" download="acta7612015.pdf">
      Desplegable Francisca Carrasco Jiménez
      </a>

      <br>
      <br>
      <input type='checkbox' name='thing' value='valuable' id="thing"/><label for="thing"></label> <label>get an army</label>
      <br>
      <br>

     </p>
   </section>



 </main>


@endsection
