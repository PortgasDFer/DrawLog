<nav class="navbar  is-dark  is-fixed-top my-3" role="navigation" aria-label="dropdown navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="{{asset('img/drawlog-logo.png')}}" width="112" height="48">
    </a>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/home">
        <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Inicio
      </a>
      <a class="navbar-item" href="/categorias-admin">
        <i class="fa fa-list" aria-hidden="true"></i>&nbsp; Categorías
      </a>
      <a class="navbar-item" href="/reportes-admin">
         <i class="fa fa-bug" aria-hidden="true"></i>&nbsp; Reportes
      </a>
    </div>
    <div class="navbar-item">
      <div class="field has-addons">
          <div class="control">
            <input class="input" type="text" placeholder="Descubre ilustraciones impresionantes">
          </div>
          <div class="control">
            <a class="button is-link">
              Buscar &nbsp;<i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </div>
        </div>
    </div>
    <div class="navbar-end">
        <div class="navbar-item"> 
            <button class="button is-link is-rounded">Sube tus ilustraciones &nbsp;<i class="fa fa-upload" aria-hidden="true"></i></button>
        </div>      
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

            <div class="navbar-dropdown">
                <a class="navbar-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <a class="navbar-item">
                    Perfil
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
  </div>
</nav>