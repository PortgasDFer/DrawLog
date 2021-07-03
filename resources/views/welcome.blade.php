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
        @foreach($draws as $draw)
          <div class="column is-3-desktop is-6-tablet is-12-mobile">
              <div class="card">
                <div class="card-image">
                  <a href="/draw/{{$draw->slug}}/view">
                    <figure class="image is-4by3">
                      <img src="draws/{{$draw->art}}" alt="Placeholder image">
                    </figure>
                  </a>
                </div>
              </div>
              <p class="is-size-4"><a href="/draw/{{$draw->slug}}/view">{{$draw->name_draw}}</a></p>
              <p class="is-size-6">By: <a href="/user/{{$draw->slug_user}}/profile">{{$draw->name}}</a></p>
          </div>
        @endforeach
        <!-- section2 -->
    </div>
</section>
<section class="section">
    <h3 class="is-size-3 ">Ranking diario <i class="fa fa-star" aria-hidden="true"></i></h3>
    <div class="columns is-multiline is-mobile has-text-centered">
        @foreach($ranking as $rank)
        <div class="column is-2-desktop is-4-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-1 by 1">
                  <img src="draws/{{$rank->art}}" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4"><a href="/draw/{{$rank->slug}}/view">{{$rank->name_draw}}</a></p>
            <p class="is-size-6">By: <a href="/user/{{$rank->slug_user}}/profile">{{$rank->name}}</a></p>
        </div>
        @endforeach
    </div>
    <div class="columns is-multiline is-mobile has-text-centered">
    </div>
</section>
@endsection
