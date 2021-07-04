@extends('layouts.template')

@section('content')
    <div class="container">
        <section class="hero is-link">
          <div class="hero-body">
            <p class="title">
              DrawLog
            </p>
            <p class="subtitle">
              Administración
            </p>
          </div>        
        </section>
        <section class="section">   
            <div class="columns is-multiline is-mobile has-text-centered">
                <div class="column is-6-desktop is-6-tablet is-12-mobile">
                    <article class="message is-link">
                      <div class="message-body">
                        <h2 class="is-size-4">{{$noDraws}}</h2> Ilustraciones <br>  
                      </div>
                    </article>
                </div>
                <div class="column is-6-desktop is-6-tablet is-12-mobile">
                    <article class="message is-danger">
                      <div class="message-body">
                         <h2 class="is-size-4">{{$noReportes}}</h2> Reportes <br> 
                         <a href="/reportes-admin"><button class="button is-danger is-outlined">Más información</button></a>
                      </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <section class="section">
        <h3 class="is-size-3">Ultimas ilustraciones</h3>   
        <div class="columns is-multiline is-mobile has-text-centered">
            <!-- section1 -->
            @foreach($draws as $draw)
            <div class="column is-3-desktop is-6-tablet is-12-mobile">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="/draws/{{$draw->art}}" alt="Placeholder image">
                    </figure>
                  </div>
                </div>
                <p class="is-size-4">Sailor Moon</p>
                <p class="is-size-6">By: SailorScout96</p>
            </div>
            @endforeach
        </div>
    </section>

@endsection
