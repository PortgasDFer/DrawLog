@extends('layouts.template')

@section('content')
<section class="hero is-link pt-4">
  <div class="hero-body">
    <p class="title">
      ¡Conviertete en un artista!
    </p>
    <p class="subtitle">
      Edita  tu ilustración
    </p>
  </div>
</section>
<section class="section">
	<div class="container">
		<div class="columns is-multiline is-mobile has-text-centered">
			<div class="column is-4-desktop is-6-tablet is-12-mobile">
				<label class="label">Imagen a editar</label>
					<figure class="image is-4by5">
	  			<img src="http://pm1.narvii.com/7714/4ccb01d8643ec68b5ac8b096f1d45259fca267c9r1-800-800v2_uhq.jpg">
					</figure>
			</div>
			<div class="column is-8-desktop is-6-tablet is-12-mobile">
				<form class="box is-primary" action="/misIlustraciones" method="POST">
				@csrf
			<div class="field">	
				<label class="label">Ilustración</label>
				<div id="file-js-example" class="file has-name">
          <label class="file-label">
            <input class="file-input" type="file" name="resume">
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
			</div>	
		  <div class="field">
		    <label class="label">Nombre</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Ej: Arte digital" name="nombre">
		    </div>
		  </div>
		  <div class="field">
		    <label class="label">Precio</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Arte generado por computadora" name="descripcion">
		    </div>
		  </div>
		  <div class="field">	
		  	<label class="label">NSFW</label>
		  	<div class="field">
			  <input id="switchColorDefault" type="checkbox" name="switchColorDefault" class="switch" checked="checked">
			  <label for="switchColorDefault">Si</label>
			</div>
		  </div>	
		  <div class="field">	
		  		<label class="label">Descripción</label>
		  		<textarea class="textarea is-primary" placeholder="Primary textarea"></textarea>
		  </div>		
		  <div class="field">
		  	<label class="label">Etiquetas</label>
		  	<input class="input" type="tags" placeholder="Add Tag" value="Tag1,Tag2,Tag3">
		  </div>
		  <button type="submit" class="button is-primary">Registrar</button>
		</form>
			</div>
		</div>
	</div>
</section>

@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bulma-tagsinput@2.0.0/dist/js/bulma-tagsinput.min.js"></script>
<script>	
const fileInput = document.querySelector('#file-js-example input[type=file]');
  fileInput.onchange = () => {
    if (fileInput.files.length > 0) {
      const fileName = document.querySelector('#file-js-example .file-name');
      fileName.textContent = fileInput.files[0].name;
    }
}
bulmaTagsinput.attach();
</script>
@endsection