@extends('layouts.template')

@section('content')
<section class="section">
<div class="columns is-marginless is-centered is-desktop ">
    @foreach($categorias as $c)
        <div class="column is-2 is-mobile-is-full">
            <a href="/draws/{{$c->name}}/view"><button class="button is-rounded" style="background-color:{{$c->color}}; color:white;">{{$c->name}}</button></a>
        </div>
    @endforeach
</div>
</section>
<section class="section">
    <div class="columns">
        <div class="column">
            <section class="section background-hero">
              <h1 class="title">Bienvenido a DrawLog</h1>
              <h2 class="subtitle has-text-white is-size-3">
                La comunidad más grande de artistas de habla hispana.
              </h2>
            </section>
        </div>
    </div>
    <h3 class="is-size-3">Trabajos recomendados</h3>
    <div class="columns is-multiline is-mobile has-text-centered">
        <!-- section1 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="img/onegai.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Two</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="img/ibuki.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Three</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://mocah.org/uploads/posts/1086379-drawing-illustration-anime-Neon-Genesis-Evangelion-Asuka-Langley-Soryu-cartoon-sketch-organ.png" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Four</p>
            <p class="is-size-6">$20</p>
        </div>
        <!-- section2 -->
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMJRQBG-108Reo5TZmDK8A9rNoiw3IRfUIOkbU2yF7NpsyRxXl"/>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
            <p class="is-size-4">Two</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMJRQBG-108Reo5TZmDK8A9rNoiw3IRfUIOkbU2yF7NpsyRxXl"/>
            <p class="is-size-4">Three</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
            <p class="is-size-4">Four</p>
            <p class="is-size-6">$20</p>
        </div>
    </div>
</section>
<section class="section">
    <h3 class="is-size-3 ">Ranking diario <i class="fa fa-star" aria-hidden="true"></i></h3>
    <div class="columns is-multiline is-mobile has-text-centered">
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="img/exampleimg1.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One</p>
            <p class="is-size-6">$20</p>
        </div>
    </div>
    <div class="columns is-multiline is-mobile has-text-centered">
    </div>
</section>

<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>
@endsection
