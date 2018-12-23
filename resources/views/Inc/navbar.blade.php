<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">MHCJS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
        <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a></li>
          <li class="{{Request::is('galeria') ? 'active' : ''}}"><a class="nav-link" href="/galeria">Galería</a></li>
          <li class="{{Request::is('noticias') ? 'active' : ''}}"><a class="nav-link" href="/noticias">Noticias</a></li>
          <li class="{{Request::is('exhibiciones') ? 'active' : ''}}"><a class="nav-link" href="/exhibiciones">Exhibiciones</a></li>
          <li class="{{Request::is('eventos') ? 'active' : ''}}"> <a class="nav-link" href="/eventos">Eventos</a></li>
          <li class="{{Request::is('servicios') ? 'active' : ''}}"> <a class="nav-link" href="/servicios">Servicios</a></li>
          <li class="{{Request::is('recursos') ? 'active' : ''}}"> <a class="nav-link" href="/recursos">Recursos</a></li>
          <li class="{{Request::is('acerca') ? 'active' : ''}}">  <a class="nav-link" href="/acerca">Acerca</a></li>
          <li class="{{Request::is('contactenos') ? 'active' : ''}}"><a class="nav-link" href="/contactenos">Contáctenos</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/">Action</a>
              <a class="dropdown-item" href="/">Another action</a>
              <a class="dropdown-item" href="/">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
