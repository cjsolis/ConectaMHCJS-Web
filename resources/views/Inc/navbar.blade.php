<nav class="nav-arriba" style=" position: absolute;  top: 0px;" >
        <ul style="position:absolute; margin-left:410px;">
          <li><a class="nav-itemarriba" href="/noticias">Noticias</a></li>
          <li><a class="nav-itemarriba" href="/contactenos">Contáctenos</a></li>
          <!--<li><a class="nav-itemarriba" href="logintienda">Iniciar Sesión</a></li>
          <li><a class="nav-itemarriba" href="/registrarsetienda">Registrarse</a></li>-->


          <!-- Right Side Of Navbar -->

              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a class="nav-itemarriba" href="{{ route('login') }}">Iniciar Sesión</a></li>
                  <li><a class="nav-itemarriba" href="{{ route('register') }}">Registrarse</a></li>

              @else
                  <li class="dropdown">
                      <a href="#" class=" nav-itemarriba" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>



                      <ul class="dropdown-menu" role="menu" style="background:#CDCDCD;">
                          <li>
                              <a href="/dashboardreservas" >Ir a mis reservas</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Cerrar sesión
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
              

        </ul>
</nav>



<nav class="navbar navbar-expand-lg navbar-light" style=" position: absolute;  left: 200px;top: 200px; ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item nav-link active" style="position: relative; display: inline-block; padding: 0px 25px;">
        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown nav-link" style="position: relative; display: inline-block; padding: 0px 25px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Exhibiciones
        </a>
        <div class="dropdown-menu" style="background-color: #AC4B5A;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color: white;" href="/exhibicionespermanentes">Permanentes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/exhibicionestemporales">Temporales</a>

        </div>
      </li>
      <li class="nav-item nav-link" style="position: relative; display: inline-block; padding: 0px 25px;">
        <a class="nav-link" href="/galeria">Galería</a>
      </li>
      <li class="nav-item nav-link" style="position: relative; display: inline-block; padding: 0px 25px;">
        <a class="nav-link" href="/eventos">Eventos</a>
      </li>

      <li class="nav-item dropdown nav-link" style="position: relative; display: inline-block; padding: 0px 25px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" style="background-color: #AC4B5A;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color: white;" href="/visitaguiada">Visita Guiada</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/servicioseducativos">Servicios Educativos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/reservavisitaguiada">Reserva Visita Guiada</a>


        </div>
      </li>

      <li class="nav-item dropdown nav-link" style="position: relative; display: inline-block; padding: 0px 50px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recursos
        </a>
        <div class="dropdown-menu" style="background-color: #AC4B5A;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color: white;" href="/campananacional">Campaña Nacional</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/centroinformacion">Centro de Información</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/arquitecturamuseo">Arquitectura del Museo</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/guinos">Guiños del 56</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color: white;" href="/catalogo">Catálogo de Piezas</a>
        </div>
      </li>


    </ul>

  </div>
</nav>
