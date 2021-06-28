@extends('layouts.template')

@section('content')
<section class="section">
	<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
	  <ul>
	    <li><a href="/">Inicio</a></li>
	    <a href="/draws/{{$categoria->name}}/view"><button class="button is-rounded" style="background-color:{{$categoria->color}}; color:white;">{{$categoria->name}}</button></a>
	  </ul>
	</nav>
	<h2 class="is-size-4">Destacados:</h2>
	 <div class="columns is-multiline is-mobile has-text-centered">
        <!-- section1 -->
        @forelse($draws as $draw)
          <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <a href="/draw/{{$draw->slug}}/view">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="/draws/{{$draw->art}}" alt="{{$draw->name_draw}}">
                  </figure>
                </div>
              </div>
            </a>
              <p class="is-size-4"><a href="/draw/{{$draw->slug}}/view">{{$draw->name_draw}}</a></p>
              <p class="is-size-6">By: <a href="/user/{{$draw->slug_user}}/profile">{{$draw->name}}</a></p>
          </div>
        @empty
        <section class="section">
          <div class="container">
            <h1 class="title">Ooops!</h1>
            <h2 class="subtitle">
              Aún no se han cargado ilustraciones para esta categoría, <a href="/misIlustraciones/create">¡Se el primero en cargar una!</a>
            </h2>
          </div>
        </section>
        @endforelse
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
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://i.pinimg.com/originals/96/8b/3d/968b3dcdc25c5756e511cb5436c018fd.jpg"/>
            <p class="is-size-4">Sailoor</p>
            <p class="is-size-6">By: SaintSeiya2010</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-CmhUFyeNaCjnsE8HZSNom8SfRaBrZtbvpCG6i4SIRwciJ-mUboFkG6n4doGCtXHayek&usqp=CAU"/>
            <p class="is-size-4">Another Moon</p>
            <p class="is-size-6">By: Selina1</p>
        </div>
        <div class="column is-3-tablet is-6-mobile">
            <img src="https://i.pinimg.com/originals/f8/28/46/f82846378c945757d100363c8091bf20.jpg"/>
            <p class="is-size-4">SalirScout Moon</p>
            <p class="is-size-6">By: Tania_Sama</p>
        </div>
	</div>
</section>
@endsection