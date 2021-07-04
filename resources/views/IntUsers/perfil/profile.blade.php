@extends('layouts.template')

@section('content')
 <div class='columns'>
  <div class='container profile'>
    <div class='section profile-heading'>
      <div class='columns is-mobile is-multiline'>
        <div class='column is-2'>
          <span class='header-icon user-profile-image'>
            <img alt='' src='/avatars/{{$profile->avatar}}'>
          </span>
        </div>
        <div class='column is-4-tablet is-10-mobile name'>
          <p>
            <span class='title is-bold'>{{$user->name}}</span>
            <br>

            <form action="/follow-profile/{{$user->slug_user}}" method="POST">
              @csrf
              <button class="button is-link is-outlined" type="submit"> <i class="fa fa-user-plus" aria-hidden="true"></i>Follow</button>
            </form>
            <br>
          </p>
          <p class='tagline'>
            {{$profile->nombre}} {{$profile->apellidos}} <br> 
            {{$profile->pais}} <br> 
            <a href="{{$profile->fb}}"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
            <a href="{{$profile->tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="{{$profile->ig}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
          <p class='stat-val'>{{$profile->visitas}}</p>
          <p class='stat-key'>Visitas</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
          <p class='stat-val'>{{$profile->seguidores}}</p>
          <p class='stat-key'>Seguidores</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
          <p class='stat-val'>{{$noIlustraciones}}</p>
          <p class='stat-key'>Ilustraciones</p>
        </div>
      </div>
    </div>
    <div class='profile-options is-fullwidth'>
      <div class='tabs is-fullwidth is-medium'>
        <ul>
          <li class='link'>
            <a>
              <span class='icon'>
                <i class='fa fa-list'></i>
              </span>
              <span>Sus ilustraciones</span>
            </a>
          </li>
          <li class='link is-active'>
            <a>
              <span class='icon'>
                <i class='fa fa-thumbs-up'></i>
              </span>
              <span>Siguiendo</span>
            </a>
          </li>
          <li class='link'>
            <a>
              <span class='icon'>
                <i class='fa fa-search'></i>
              </span>
              <span>Seguidores</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class='box' style='border-radius: 0px;'>
      <!-- Main container -->
      <div class='columns'>
        <div class='column is-2-tablet user-property-count has-text-centered'>
          <p class='subtitle is-5'>
            <strong></strong>
            {{$noIlustraciones}}
            <br>
            Ilustraciones
          </p>
        </div>
        <div class='column is-8'>
          <p class='control has-addons'>
            <input class='input' placeholder='Search your liked properties' style='width: 100% !important' type='text'>
            <button class='button'>
              Buscar
            </button>
          </p>
        </div>
      </div>
    </div>
    <div class='columns is-mobile'>
      @forelse($ilustraciones as $draw)
      <div class='column is-3-tablet is-6-mobile'>
        <div class='card'>
          <a href="/draw/{{$draw->slug}}/view">
            <div class='card-image'>
              <figure class='image is-4by3'>
                <img alt='' src='/draws/{{$draw->art}}'>
              </figure>
            </div>
          </a>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>{{$draw->name_draw}}</span>
              <p>{{$draw->descripcion}}</p>
            </div>
          </div>
          <footer class='card-footer'>
              <form method="POST" action="#" class="card-footer-item">
                @method('DELETE')
                @csrf
                <button class="button is-info is-outlined"> <i class="fa fa-flag-checkered" aria-hidden="true"></i>Report</button>  
              </form>
              <form method="POST" action="#" class="card-footer-item">
                @method('DELETE')
                @csrf
                <button class="button is-danger is-outlined"> <i class="fa fa-heart-o" aria-hidden="true"></i>Ver</button>
              </form>
          </footer>
        </div>
        <br>
      </div>
      @empty
        <h2>No ha subido ilustraciones todavía.</h2>
      @endforelse
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script>
	$(() => {
	  $('#edit-preferences').click(function(){
	   $('#edit-preferences-modal').addClass('is-active');
	  });
	  $('.modal-card-head button.delete, .modal-save, .modal-cancel').click(function(){
	    $('#edit-preferences-modal').removeClass('is-active');
	  });
	});

  const fileInput = document.querySelector('#file-js-example input[type=file]');
  fileInput.onchange = () => {
    if (fileInput.files.length > 0) {
      const fileName = document.querySelector('#file-js-example .file-name');
      fileName.textContent = fileInput.files[0].name;
    }
  }
</script>	
@endsection