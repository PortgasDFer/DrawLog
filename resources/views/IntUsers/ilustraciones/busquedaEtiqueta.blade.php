@extends('layouts.template')

@section('content')
<section class="section">
	<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
	  <ul>
	    <li><a href="/">Inicio</a></li>
	    <li class="is-active"><a href="#" aria-current="page">Busqueda por etiqueta</a><a href="">#One_Piece</a> </li>
	  </ul>
	</nav>
	<h2 class="is-size-4">Destacados:</h2>
	 <div class="columns is-multiline is-mobile has-text-centered">
        <!-- section1 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0590169c-ef18-4c44-8524-13912e317da2/d5zcohr-894c9cf9-0b66-4515-86ee-1591f1d11922.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzA1OTAxNjljLWVmMTgtNGM0NC04NTI0LTEzOTEyZTMxN2RhMlwvZDV6Y29oci04OTRjOWNmOS0wYjY2LTQ1MTUtODZlZS0xNTkxZjFkMTE5MjIuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.97D61jadpG6HnIMi0OuL8dANnDFoGJO-aiXycGtRD5M" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">One Piece</p>
            <p class="is-size-6">By: SailorScout96</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://pbs.twimg.com/media/EYOw_1wUcAMOoDl.jpg" alt="Placeholder image">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Luffy</p>
            <p class="is-size-6">By:02_nina</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://i.pinimg.com/640x/c6/34/81/c63481251480f6737eda31ce8ad91419.jpg"/>
                </figure>
              </div>
            </div>
            <p class="is-size-4">One Piece</p>
            <p class="is-size-6">By: Uzumaki235</p>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="http://pm1.narvii.com/7270/adefb43f2972fadd02a2bc72ca1b5d4d717a5d55r1-2048-1647v2_uhq.jpg">
                </figure>
              </div>
            </div>
            <p class="is-size-4">Monkey D. Luffy</p>
            <p class="is-size-6">By: Kirito203</p>
        </div>
    </div>
</section>
<section class="section">
	<h3 class="is-size-4">Otros resultados</h3>
	<div class="columns is-multiline is-mobile has-text-centered">
		<div class="column is-3-tablet is-6-mobile">
        <img src="https://static.boredpanda.com/blog/wp-content/uploads/2020/05/Artists-from-around-the-world-challenged-themselves-to-draw-the-heroine-Sailor-Moon-in-their-own-style-5ec4d5a2cd7fb__700.jpg"/>
        <p class="is-size-4">Challege S moon</p>
        <p class="is-size-6">By: Ora_Rita12</p>
    </div>
	</div>
</section>
@endsection