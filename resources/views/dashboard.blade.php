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
                        <h2 class="is-size-4">24</h2> Ilustraciones <br>  
                        <button class="button is-link is-outlined">Más información</button>
                      </div>
                    </article>
                </div>
                <div class="column is-6-desktop is-6-tablet is-12-mobile">
                    <article class="message is-danger">
                      <div class="message-body">
                         <h2 class="is-size-4">4</h2> Reportes <br> 
                         <button class="button is-danger is-outlined">Más información</button>
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
            <div class="column is-3-desktop is-6-tablet is-12-mobile">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://i.pinimg.com/originals/24/97/ee/2497ee8b9b9f4920c631d42a07ae6edf.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                </div>
                <p class="is-size-4">Sailor Moon</p>
                <p class="is-size-6">By: SailorScout96</p>
            </div>
            <div class="column is-3-desktop is-6-tablet is-12-mobile">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://static.boredpanda.com/blog/wp-content/uploads/2020/05/ggg-5ec45eefd23fc__700.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                </div>
                <p class="is-size-4">Challenge S Moon</p>
                <p class="is-size-6">By:02_nina</p>
            </div>
            <div class="column is-3-desktop is-6-tablet is-12-mobile">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://i.ytimg.com/vi/V_TpxT5ptjA/hqdefault.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                </div>
                <p class="is-size-4">Sailor Mars</p>
                <p class="is-size-6">By: Uzumaki235</p>
            </div>
            <div class="column is-3-desktop is-6-tablet is-12-mobile">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://static.boredpanda.com/blog/wp-content/uploads/2020/05/Artists-from-around-the-world-challenged-themselves-to-draw-the-heroine-Sailor-Moon-in-their-own-style-5ec4d698e8a6c__700.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                </div>
                <p class="is-size-4">Challenge S Moon</p>
                <p class="is-size-6">By: Kirito203</p>
            </div>
        </div>
    </section>

@endsection
