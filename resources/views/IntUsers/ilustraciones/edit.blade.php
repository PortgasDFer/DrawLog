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
	  			<img src="/draws/{{$draw->art}}">
					</figure>
			</div>
			<div class="column is-8-desktop is-6-tablet is-12-mobile">
				<form class="box is-primary" action="/misIlustraciones/{{$draw->slug}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
			<div class="field">	
				<label class="label">Ilustración</label>
				<div id="file-js-example" class="file has-name">
          <label class="file-label">
            <input class="file-input" type="file" name="dibujo">
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
		      <input class="input" type="text" placeholder="Ej: Arte digital" name="nombre" value="{{$draw->name_draw}}">
		    </div>
		  </div>
		  <div class="field">
		    <label class="label">Precio</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Arte generado por computadora" name="precio" value="{{$draw->precio}}">
		    </div>
		  </div>
		  <div class="field">
		    <label class="label">Categoría</label>
		    <div class="control">
		      <div class="select">
				  <select class="input" name="categoria">
				  		<option value="{{$draw->id_categoria}}">Conservar misma categoría</option>
				    @foreach($categorias as $cat)
				    	<option value="{{$cat->id}}">{{$cat->name}}</option>
				    @endforeach	
				  </select>
				</div>
		    </div>
		  </div>
		  <div class="field">	
		  	<label class="label">NSFW</label>
		  	<div class="field">
			  <input id="switchColorDefault" type="checkbox" name="nsfw" class="switch" checked="checked">
			  <label for="switchColorDefault">Si</label>
			</div>
		  </div>	
		  <div class="field">	
		  		<label class="label">Descripción</label>
		  		<textarea class="textarea is-primary" placeholder="Primary textarea" name="descripcion">{{$draw->descripcion}}</textarea>
		  </div>		
		  <div class="field">
		  	<label class="label">Etiquetas</label>
		  	<input class="input" type="tags" placeholder="Add Tag" value="@foreach($draw->tags as $tag){{$tag->name}},  @endforeach">
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