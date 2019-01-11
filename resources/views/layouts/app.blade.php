<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <title>MHCJS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">



  </head>

  <body >
    <div id="container">
      <div class="page-wrap">

          <?php if (Request::is('catalogotienda')) { ?>
            <?php echo "es catalogo de la tienda" ?>
              @include('inc.navbartienda')
          <?php } else { ?>
              @include('inc.navbar')
          <?php } ?>

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
     </div>
     @include('inc.footers')

  </body>
</html>
