@extends('layouts.template')

@section('content')
 <div class='columns'>
  <div class='container profile'>
    <div class='modal' id='edit-preferences-modal'>
      <div class='modal-background'></div>
      <div class='modal-card'>
        <header class='modal-card-head'>
          <p class='modal-card-title'>Edit Preferences</p>
          <button class='delete'></button>
        </header>
        <section class='modal-card-body'>
        <form action="/profiles" method="POST" enctype="multipart/form-data">
          @csrf
          yo estoy
          <label class='label'>Avatar</label>
          <p class='control'>
            <div id="file-js-example" class="file has-name">
              <label class="file-label">
                <input class="file-input" type="file" name="avatar">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                  </span>
                  <span class="file-label">
                    Escoge un archivo…
                  </span>
                </span>
                <span class="file-name">
                  No se ha seleccionado
                </span>
              </label>
            </div>
          </p>
          <label class='label'>Nombre</label>
          <p class='control'>
            <input class='input' type='text' name="nombre" value="{{$profile->nombre}}">
          </p>
          <label class='label'>Apellidos</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="apellidos" value="{{$profile->apellidos}}">
          </p>
          <label class='label'>País</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="pais" value="{{$profile->pais}}">
          </p>
          <label class='label'>Email Paypal</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="paypal" value="{{$profile->emai_paypal}}">
          </p>
          <label class='label'>Facebook</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="fb" value="{{$profile->fb}}">
          </p>
          <label class='label'>Twitter</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="tw" value="{{$profile->tw}}">
          </p>
          <label class='label'>Instagram</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="ig" value="{{$profile->ig}}">
          </p>
          <label class='label'>Nickname</label>
          <p class='control has-icon has-icon-right'>
            <input class='input' placeholder='Text input' type='text' value='{{$user->name}}'>
          </p>
        </section>
        <footer class='modal-card-foot'>
          <button class="button is-primary" type="submit">Save changes</button>
          <a class='button modal-cancel'>Cancel</a>
        </footer>
      </form>
      </div>
    </div>
    <div class='modal' id='update-preferences-modal'>
      <div class='modal-background'></div>
      <div class='modal-card'>
        <header class='modal-card-head'>
          <p class='modal-card-title'>Actualizar datos</p>
          <button class='delete'></button>
        </header>
        <section class='modal-card-body'>
        <form action="/profiles/{{$profile->id_profile}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          ACTUALIZA 
          <label class='label'>Avatar</label>
          <p class='control'>
            <div id="file-js-example" class="file has-name">
              <label class="file-label">
                <input class="file-input" type="file" name="avatar">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                  </span>
                  <span class="file-label">
                    Escoge un archivo…
                  </span>
                </span>
                <span class="file-name">
                  No se ha seleccionado
                </span>
              </label>
            </div>
          </p>
          <label class='label'>Nombre</label>
          <p class='control'>
            <input class='input' type='text' name="nombre" value="{{$profile->nombre}}">
          </p>
          <label class='label'>Apellidos</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="apellidos" value="{{$profile->apellidos}}">
          </p>
          <label class='label'>País</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="pais" value="{{$profile->pais}}">
          </p>
          <label class='label'>Email Paypal</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="paypal" value="{{$profile->emai_paypal}}">
          </p>
          <label class='label'>Facebook</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="fb" value="{{$profile->fb}}">
          </p>
          <label class='label'>Twitter</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="tw" value="{{$profile->tw}}">
          </p>
          <label class='label'>Instagram</label>
          <p class='control'>
            <input class='input' placeholder='Text input' type='text' name="ig" value="{{$profile->ig}}">
          </p>
          <label class='label'>Nickname</label>
          <p class='control has-icon has-icon-right'>
            <input class='input' placeholder='Text input' type='text' value='{{$user->name}}'>
          </p>
        </section>
        <footer class='modal-card-foot'>
          <button class="button is-primary" type="submit">Save changes</button>
          <a class='button modal-cancel'>Cancel</a>
        </footer>
      </form>
      </div>
    </div>
    <div class='section profile-heading'>
      @if($profile==null)
      <div class='columns is-mobile is-multiline'>
        <div class="column is-12">
          <div class="notification is-warning">
            <button class="delete"></button>
            No has terminado de completar tu perfil. 
            Por favor termina de completar tu perfil haciendo <a href="#"  id='edit-preferences'>clic aquí</a>
          </div>
        </div>
      </div>
      @endif
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
            <a class='button is-primary is-outlined' href='#' id='update-preferences' style='margin: 5px 0'>
              Editar Perfil
            </a>
            <br>
          </p>
          <p class='tagline'>
            The users profile bio would go here, of course. It could be two lines or more or whatever. We should probably limit the amount of characters to ~500 at most though.
          </p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
          <p class='stat-val'>30</p>
          <p class='stat-key'>Visitas</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
          <p class='stat-val'>10</p>
          <p class='stat-key'>Seguidores</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
          <p class='stat-val'>3</p>
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
              <span>Mis ilustraciones</span>
            </a>
          </li>
          <li class='link is-active'>
            <a>
              <span class='icon'>
                <i class='fa fa-thumbs-up'></i>
              </span>
              <span>Mis Likes</span>
            </a>
          </li>
          <li class='link'>
            <a>
              <span class='icon'>
                <i class='fa fa-search'></i>
              </span>
              <span>Mis Seguidores</span>
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
            2
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
      <div class='column is-3-tablet is-6-mobile'>
        <div class='card'>
          <div class='card-image'>
            <figure class='image is-4by3'>
              <img alt='' src='https://http2.mlstatic.com/D_NQ_NP_894309-MLM42729402901_072020-O.jpg'>
            </figure>
          </div>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>Naruto Modo sabio</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <footer class='card-footer'>
            <a class='card-footer-item'>Editar</a>
            <a class='card-footer-item'>Eliminar</a>
          </footer>
        </div>
        <br>
      </div>
      <div class='column is-3-tablet is-6-mobile'>
        <div class='card'>
          <div class='card-image'>
            <figure class='image is-4by3'>
              <img alt='' src='https://i0.wp.com/i0.wp.com/todoimagenes.co/wp-content/uploads/2018/04/maravillosos-animales-para-dibujar-a-lapiz-faciles-pin-de-juan-pablo-en-anime-pinterest-im-genes.jpg'>
            </figure>
          </div>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>Pikachu</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
            </div>
          </div>
          <footer class='card-footer'>
            <a class='card-footer-item'>Editar</a>
            <a class='card-footer-item'>Eliminar</a>
          </footer>
        </div>
        <br>
      </div>
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

  $(() => {
    $('#update-preferences').click(function(){
     $('#update-preferences-modal').addClass('is-active');
    });
    $('.modal-card-head button.delete, .modal-save, .modal-cancel').click(function(){
      $('#update-preferences-modal').removeClass('is-active');
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