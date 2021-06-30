@extends('layouts.template')

@section('content')
<section class="section">	
	<div class="container">
		<div class="columns is-multiline is-mobile has-text-centered">
			<div class="column is-6-desktop is-7-tablet is-12-mobile">
				<div class="card">
				  <div class="card-image">
				    <figure class="image is-4by3">
				      <img src="/draws/{{$draw->art}}" alt="Placeholder image">
				    </figure>
				  </div>
				  <div class="card-content">
				    <div class="media">
				      <div class="media-left">
				        <figure class="image is-48x48">
				          <img src="/avatars/{{$profile->avatar}}" alt="Placeholder image">
				        </figure>
				      </div>
				      <div class="media-content">
				        <p class="title is-4">{{$draw->name_draw}}</p>
				        <p class="subtitle is-6"><a href="/user/{{$autor->slug}}/profile">{{$autor->name}}</a></p>
				        <p class="subtitle is-6">Likes: ♥ {{$draw->likes}} </p>
				      </div>
				    </div>

				    <div class="content">
				      {{$draw->descripcion}}
				      @foreach($draw->tags as $tag)<a href="/tag/{{$tag->slug}}/view">#{{$tag->name}}</a>  @endforeach
				      <br>
				      <time datetime="2016-1-1">{{$draw->created_at->format('H:i')}} - {{$draw->created_at->format('d/m/Y')}}</time>
				    </div>
				  </div>
				</div>
			</div>	
			<div class="column is-6-desktop is-5-tablet is-12-mobile">
				<p class="is-size-3">Motivo del reporte</p>
				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="/avatars/{{$profile_d->avatar}}">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="content">
				      <p>
				        <strong>{{$denunciante->name}}</strong>
				        <br>
				        {{$reporte->descripcion}}
				        <br>
				      </p>
				    </div>
				  </div>
				</article>
				<div class="section">
					<div class="buttons is-pulled-left">
						<form action="/aprobar/{{$reporte->id_reporte}}" method="POST">
							@csrf
							<button class="button is-info is-outlined" type="submit"> <i class="fa fa-flag-checkered" aria-hidden="true"></i>Aprobar reporte</button>
						</form>
					</div>	
					<div class="buttons is-pulled-right">
						<form action="/denegar/{{$reporte->id_reporte}}" method="POST">
							@csrf
							<button class="button is-danger is-outlined"> <i class="fa fa-heart-o" aria-hidden="true"></i>Denegar</button>
						</form>
					</div>	
				</div>	
			</div>
		</div>
	</div>
</section>	
@endsection