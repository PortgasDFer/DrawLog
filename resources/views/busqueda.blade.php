<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/octoshrimpy/bulma-o-steps/master/bulma-steps.css">
	<title>DrawLog - Inicio</title>
</head>
<body>
<div class="pageloader"><span class="title">Pageloader</span></div>
<nav class="navbar is-dark  is-fixed-top" role="navigation" aria-label="main navigation">
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
      <a class="navbar-item">
        <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Inicio
      </a>
      <a class="navbar-item">
        <i class="fa fa-free-code-camp" aria-hidden="true"></i>&nbsp; Mejores ilustraciones
      </a>
      <a class="navbar-item fb-color">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
      </a>
      <a class="navbar-item ig-color">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
      <a class="navbar-item tw-color">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="/register" class="button is-primary">
            <strong>Registrate</strong>
          </a>
          <a href="/login" class="button is-light">
            Iniciar sesión
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<section class="hero is-medium is-link is-bold">
  <div class="container">
    <div class="hero-body">
      <p class="title">
        DrawLOG
      </p>
      <p class="subtitle">
       ¡Monetizar tu arte digital nunca había sido tan fácil!
      </p>
      <p>
        <div class="field has-addons">
          <form action="/search/" method="POST">
            @csrf
            @method('GET')
            <div class="field has-addons">
                
                <div class="control">
                  <input class="input" type="text" placeholder="Descubre ilustraciones impresionantes" name="search">
                </div>
                <div class="control">
                  <button class="button is-primary" type="submit"> Buscar &nbsp;<i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
          </form>
        </div>
      </p>
    </div>
  </div>
</section>
<div class="container">
  <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
    <ul>
      <li><a href="/">Inicio</a></li>
      <li class="is-active"><a href="#" aria-current="page">Busqueda por palabra</a> <i>{{$palabra}}</i></li>
    </ul>
  </nav>
  <h2 class="is-size-4">Destacados:</h2>
   <div class="columns is-multiline is-mobile has-text-centered">
      <!-- section1 -->
      @forelse($draws as $draw)
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
          <a href="#">
            <div class="card">
              <div class="card-image">
                  <img src="/draws/{{$draw->art}}" alt="{{$draw->name_draw}}">
              </div>
            </div>
          </a>
            <p class="is-size-4"><a href="#">{{$draw->name_draw}}</a></p>
            <p class="is-size-6">By: <a href="#">{{$draw->name}}</a></p>
        </div>
      @empty
      <section class="section">
        <div class="container">
          <h1 class="title">Ooops!</h1>
          <h2 class="subtitle">
            No se encontraron resultados, <a href="/login">¡Carga una ilustración!</a>
          </h2>
        </div>
      </section>
      @endforelse
</div>
</div>
<footer class="footer  is-primary" style="background-color: #282828; margin-top: 19px; color: white;">
  <div class="content has-text-centered">
    <div class="columns">
      <div class="column">
        <a href="#" class="is-link"><i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp;Terminos y condiciones</a> || <a href="#" class="is-link"> <i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp;Politica de uso</a> <br>
        <a href="https://github.com/PortgasDFer"><i class="fa fa-github" aria-hidden="true"></i> Otros proyectos</a>
      </div>
      <div class="is-divider-vertical" data-content="UTN"></div>
      <div class="column">
        <p>Fernando López Servín&copy;</p> 
        <br>
        <a href="https://github.com/PortgasDFer/DrawLog"><i class="fa fa-github" aria-hidden="true"></i> &nbsp;Repositorio del proyecto</a>
      </div>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {
    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {
        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
</script>
</body>
</html>