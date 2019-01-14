<!DOCTYPE html>
<html lang="en" dir="ltr" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <title>MHCJS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">



  </head>

  <body style="height:100%;">
    <div id="container">
        <div class="page-wrap">

            @include('Inc.adminnavbar')
              
            <div class="container">
                @include('Inc.showcase')

                <div class="row" style="position: absolute;  left: 225px;top: 200px;">
                   <div class="col-md-8 col-lg-8">
                        <div class="wrapper">
                        @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>