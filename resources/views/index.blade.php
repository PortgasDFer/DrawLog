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
          <a class="button is-primary">
            <strong>Registrate</strong>
          </a>
          <a class="button is-light">
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
          <div class="control">
            <input class="input" type="text" placeholder="Descubre ilustraciones impresionantes">
          </div>
          <div class="control">
            <a class="button is-primary">
              Buscar &nbsp;<i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </p>
    </div>
  </div>
</section>
<img src="{{asset('img/mascot-header.png')}}" alt="" style=" width:20%; margin-top: -172px;">
<div class="container">
  <section class="section is-medium">
    <h1 class="title">Al alcance de todos.</h1>
    <h2 class="subtitle">
      Comparte tus ilustraciones y comienza a generar ingresos. <strong>Acepta comisiones</strong> o vende los derechos de tus ilustraciones para uso comercial. <br><small>Consulta los terminos y condiciones. ¡Disfruta el contenido y diviértete!</small>
    </h2>
    <p>DrawLog es un espacio para artistas que desean comenzar a generar ingresos a través de sus ilustraciones.</p>
  </section>
  <section class="section">
      <div class="columns ">
        <div class="column has-text-centered">
            <h1 class="title is-size-1 has-text-link">¿Cómo funciona?</h1>
        </div>
        <div class="column">
            <ul class="steps has-content-centered">
              <li class="steps-segment">
                <span class="steps-marker"></span>
                <div class="steps-content">
                  <p class="is-size-4">Paso 1</p>
                  <p>Registrate en DrawLog <a href="">haciendo click aquí.</a>.</p>
                </div>
              </li>
              <li class="steps-segment">
                <span class="steps-marker"></span>
                <div class="steps-content">
                  <p class="is-size-4">Paso 2</p>
                  <p>Valida tu identidad y rellena los datos de tu perfil.</p>
                </div>
              </li>
              <li class="steps-segment">
                <span class="steps-marker"></span>
                <div class="steps-content">
                  <p class="is-size-4">Paso 3</p>
                  <p>Es necesario tener una cuenta en PayPal para recibir pagos.</p>
                </div>
              </li>
              <li class="steps-segment">
                <span class="steps-marker"></span>
                <div class="steps-content">
                  <p class="is-size-4">Paso 4</p>
                  <p>Sube tus ilustraciones y muestralas al publico</p>
                </div>
              </li>
              <li class="steps-segment  is-active">
                <span class="steps-marker"></span>
                <div class="steps-content">
                  <p class="is-size-4">Paso 5</p>
                  <p>¡Estas listo para comenzar a monetizar tus ilustraciones!</p>
                </div>
              </li>
            </ul>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            Otra columna dentro de una nueva fila
        </div>
    </div>
  </section>
  <h1 class="title">Ilustraciones aleatorias</h1>
  <div class="columns">
    <div class="column">
      <figure class="image is-3by2">
        <img src="https://images.hdqwalls.com/wallpapers/fanart-of-asuka-r5.jpg">
      </figure>
      Autor: Phantom123
    </div>
    <div class="column">
      <figure class="image is-3by2">
        <img src="https://i.pinimg.com/originals/47/98/ac/4798ac6362e2663cb1bee88e63e7a719.jpg">
      </figure>
      Autor: Selina Kyle
    </div>
    <div class="column">
      <figure class="image is-3by2">
        <img src="https://comicvine1.cbsistatic.com/uploads/original/11127/111275590/5081852-0643928345-shatt.png">
      </figure>
      Autor: Tommy Shelby
    </div>
    <div class="column">
      <figure class="image is-3by2">
        <img src="https://www.wallpaperflare.com/static/293/122/421/tengen-toppa-gurren-lagann-simon-tengen-toppa-wallpaper.jpg">
      </figure>
      Autor: Van Persie
    </div>
  </div>
</div>

<footer class="footer  is-primary" style="background-color: #282828; margin-top: 19px; color: white;">
  <div class="content has-text-centered">
    <div class="columns">
      <div class="column">
        <a href="#" class="is-link"><i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp;Terminos y condiciones</a> || <a href="#" class="is-link"> <i class="fa fa-thumb-tack" aria-hidden="true"></i> &nbsp;Politica de uso</a> <br>
        <a href=""><i class="fa fa-github" aria-hidden="true"></i> Otros proyectos</a>
      </div>
      <div class="is-divider-vertical" data-content="UTN"></div>
      <div class="column">
        <p>Fernando López Servín&copy;</p> 
        <br>
        <a href="#"><i class="fa fa-github" aria-hidden="true"></i> &nbsp;Repositorio del proyecto</a>
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