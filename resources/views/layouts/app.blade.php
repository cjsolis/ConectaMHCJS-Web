<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MHCJS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">



  </head>

  <body>

    <div class="page-wrap">
        @include('inc.navbar')
        <div class="container">
          @include('inc.showcase')
          <!--@if(Request::is('/'))
            @include('inc.showcase')
          @endif-->
           <div class="row" style=" position: absolute;  left: 200px;top: 350px;">
             <div class="col-md-8 col-lg-8">
               @include('inc.messages')
               @yield('content')
             </div>
           </div>
          </div>
     </div>



     <div id="footer">
        <div class="container footer">
          <div class="one_fourth">
            <h3>Latest Tweets</h3>
            <ul>
              <h5>Museo Histórico Cultural Juan Santamaría</h5>
              <h5>Tel: (506) 2222-2222 / 2222-2224</h5>
              <h5>museo@dominio.com</h5>

            </ul>
          </div>
          <div class="one_fourth">


          </div>
          <div class="one_fourth">

            <ul>

              <li class="lines"><a href="#" class="">Transparencia</a></li>
              <li class="lines"><a href="#" class="">Trámites</a></li>
              <li class="lines"><a href="#" class="">Preguntas Frecuentes</a></li>
            </ul>
          </div>
          <div class="one_fourth lastcolumn">
            <ul>

              <li class="lines"><a href="#" class="">Denuncias y Quejas</a></li>
              <li class="lines"><a href="#" class="">Enlaces Amigos</a></li>
              <li class="lines"><a href="#" class="">Acerca de Nosotros</a></li>
            </ul>
          </div>
        </div>
      </div>


     <!--<footer>
       <h1>Footer Content</h1>
     </footer>-->


     <!--<footer>
     	<div class="footerLinks" style="color:#000066 ; bottom:0; position: fixed; width: 100%;height: 150px;margin-top: 600px; margin-right: -100px;background-color: #000066;">
     		<ul>
     			<li><a href="#">Privacy Policy</a></li>
       			<li><a href="#">Legal</a></li>
       			<li><a href="#">Site Map</a></li>
       			<li><a href="#">Contact Us</a></li>
     		</ul>
     	</div>
     	<div class="copyright">
     		<p>Copyright 2016</p>
     </footer>-->

     <!--<footer id="footer" class="text-center" style="color:#000066 ; bottom:0; position: fixed; width: 100%;height: 150px;margin-top: 600px; margin-right: -100px;background-color: #000066;">
       <p>Copyright 2018 &copy; MHCJS</p>
     </footer>-->

  </body>
</html>
