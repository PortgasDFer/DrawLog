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
                    <img src="/draws/{{$draw->art}}" alt="{{$draw->name_draw}}">
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
  {{ $draws->links() }}
<section class="section">
	<h3 class="is-size-4">Otros resultados</h3>
	<div class="columns is-multiline is-mobile has-text-centered">
		 @foreach($anothers as $d)
    <div class="column is-3-tablet is-6-mobile">
        <img src="/draws/{{$d->art}}" alt="{{$d->name_draw}}">
        <p class="is-size-4"><a href="/draw/{{$d->slug}}/view">{{$d->name_draw}}</a></p>
            <p class="is-size-6">By: <a href="/user/{{$d->slug_user}}/profile">{{$d->name}}</a></p>
    </div>
    @endforeach
	</div>
</section>
@endsection