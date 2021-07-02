@extends('layouts.template')
@section('content')
<section class="hero is-link pt-4">
  <div class="hero-body">
    <p class="title">
      Edita la categoría {{$categoria->name}}
    </p>
    <p class="subtitle">
      {{$categoria->description}}.
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
		<form class="box is-primary" action="/categorias-admin/{{$categoria->id}}" method="POST">
			@csrf
			@method('PUT')
		  <div class="field">
		    <label class="label">Nombre</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Ej: Arte digital" name="nombre" value="{{$categoria->name}}">
		    </div>
		  </div>

		  <div class="field">
		    <label class="label">Descripción</label>
		    <div class="control">
		      <input class="input" type="text" placeholder="Arte generado por computadora" name="descripcion" value="{{$categoria->description}}">
		    </div>
		  </div>
		  
		  <div class="field">
		  	<label class="label">Color de etiqueta</label>
		  	<div class="control"> 
		  		<input type="color" id="colorpicker" value="{{$categoria->color}}" name="color">
		  	</div>
		  </div>	

		  <button type="submit" class="button is-primary">Registrar</button>
		</form>
	</div>
</section>

@endsection
