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
      <!-- <div class="col-md-4 col-lg-4">
         @include('inc.sidebar')
       </div>-->
     </div>
   </div>
   <footer id="footer" class="text-center" style="position: relative;height: 200px;margin-top: 600px; margin-right: -100px;background-color: #000066;">
     <p>Copyright 2018 &copy; MHCJS</p>
   </footer>
  </body>
</html>
