@extends('layouts.template')
@section('content')
<section class="hero is-link pt-4">
  <div class="hero-body">
    <p class="title">
      Crea una categoría
    </p>
    <p class="subtitle">
      Agrega nuevas categorías para clasificar las ilustraciones.
    </p>
  </div>
</section>
<section class="section">
	<div class="container">
		@if (count($errors) > 0)
			<div class="notification is-danger">
			  <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
			</div>
    @endif
		<form class="box is-primary" action="/categorias-admin" method="POST">
			@csrf
		  <div class="field">
		    <label class="label">Nombre</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Ej: Arte digital" name="nombre">
		    </div>
		  </div>

		  <div class="field">
		    <label class="label">Descripción</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Arte generado por computadora" name="descripcion">
		    </div>
		  </div>
		  
		  <div class="field">
		  	<label class="label">Color de etiqueta</label>
		  	<div class="control"> 
		  		<input type="color" id="colorpicker" value="#0000ff" name="color">
		  	</div>
		  </div>	

		  <button type="submit" class="button is-primary">Registrar</button>
		</form>
	</div>
</section>

@endsection
