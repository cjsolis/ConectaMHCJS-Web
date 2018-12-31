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
              @include('Inc.navbartienda')
          <?php } else { ?>
            <?php echo "NO LO ES" ?>
              @include('Inc.navbar')
          <?php } ?>

          <div class="container">
            @include('Inc.showcase')
            <!--@if(Request::is('/'))
              @include('inc.showcase')
            @endif-->
             <div class="row" style=" position: absolute;  left: 200px;top: 350px;">
               <div class="col-md-8 col-lg-8">
                 @include('Inc.messages')
                 @yield('content')
               </div>
             </div>
            </div>
       </div>
     </div>
     @include('Inc.footers')




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
