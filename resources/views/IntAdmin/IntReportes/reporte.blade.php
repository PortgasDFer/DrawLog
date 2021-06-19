@extends('layouts.template')

@section('content')
<section class="section">	
	<div class="container">
		<div class="columns is-multiline is-mobile has-text-centered">
			<div class="column is-6-desktop is-7-tablet is-12-mobile">
				<div class="card">
				  <div class="card-image">
				    <figure class="image is-4by3">
				      <img src="/img/asuka.jpg" alt="Placeholder image">
				    </figure>
				  </div>
				  <div class="card-content">
				    <div class="media">
				      <div class="media-left">
				        <figure class="image is-48x48">
				          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
				        </figure>
				      </div>
				      <div class="media-content">
				        <p class="title is-4">Feliz Jueves!</p>
				        <p class="subtitle is-6">Andy♥</p>
				      </div>
				    </div>

				    <div class="content">
				      Arriba el Atlas amigos y feliz jueves! <a>bendiciones</a>.
				      <a href="#">#Asuka</a> <a href="#">#Atlas</a>
				      <br>
				      <time datetime="2016-1-1">11:09 PM - 15 Jun 2021</time>
				    </div>
				  </div>
				</div>
			</div>	
			<div class="column is-6-desktop is-5-tablet is-12-mobile">
				<p class="is-size-3">Motivo del reporte</p>
				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="https://bulma.io/images/placeholders/128x128.png">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="content">
				      <p>
				        <strong>Im_sama2010</strong>
				        <br>
				        En este parrafo va el motivo del reporte de la ilustración
				        <br>
				        <small>· 3 hrs</small>
				      </p>
				    </div>
				  </div>
				</article>
				<div class="section">
					<div class="buttons is-pulled-left">
						<button class="button is-info is-outlined"> <i class="fa fa-flag-checkered" aria-hidden="true"></i>Aprobar reporte</button>	
					</div>	
					<div class="buttons is-pulled-right">
						<button class="button is-danger is-outlined"> <i class="fa fa-heart-o" aria-hidden="true"></i>Denegar</button>
					</div>	
				</div>	
			</div>
		</div>
	</div>
</section>	
@endsection