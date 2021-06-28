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
				        <p class="subtitle is-6">{{$autor->name}}</p>
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
				<div class="section">
					<div class="buttons is-pulled-left">
						<button class="button is-info is-outlined"> <i class="fa fa-flag-checkered" aria-hidden="true"></i>Report</button>	
					</div>	
					<div class="buttons is-pulled-right">
						<button class="button is-link is-outlined"> <i class="fa fa-user-plus" aria-hidden="true"></i>Follow</button>
						<button class="button is-danger is-outlined"> <i class="fa fa-heart-o" aria-hidden="true"></i>Like</button>
					</div>	
				</div>
			</div>	
			<div class="column is-6-desktop is-5-tablet is-12-mobile">
				<p class="is-size-3">Comentarios</p>
				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="https://bulma.io/images/placeholders/128x128.png">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="content">
				      <p>
				        <strong>Barbara Middleton</strong>
				        <br>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
				        <br>
				        <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
				      </p>
				    </div>
				  </div>
				</article>
				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="https://bulma.io/images/placeholders/128x128.png">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="field">
				      <p class="control">
				        <textarea class="textarea" placeholder="Add a comment..."></textarea>
				      </p>
				    </div>
				    <div class="field">
				      <p class="control">
				        <button class="button">Post comment</button>
				      </p>
				    </div>
				  </div>
				</article>	
			</div>
		</div>
	</div>
</section>	
@endsection