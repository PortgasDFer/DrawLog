@extends('layouts.template')
@section('content')
<section class="hero is-link pt-4">
  <div class="hero-body">
    <p class="title">
      Listado de categorías
    </p>
    <p class="subtitle">
      Agrega nuevas categorías para clasificar las ilustraciones.
    </p>
  </div>
</section>
<section>
	<div class="columns is-desktop">
	  <div class="column  is-two-thirds is-desktop is-fullwidth ">
	  		<div class="box">
	  			<div class="table-container">
				    <table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="categorias">
				    	<thead>
				    		<tr>
					    		<th>Categoría</th>
					    		<th>Descripción</th>
					    		<th>Color</th>
					    		<th>Editar</th>
					    		<th>Eliminar</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    	</tbody>
				    </table>
				</div>
	  		</div>
	  </div>
	  <div class="column">
	    <div class="box">
		  <a href="/categorias-admin/create"><button class="button is-link is-rounded is-fullwidth">Registrar nueva categoría</button></a>
		  <hr>
		  <a href=""><button class="button is-link is-rounded is-fullwidth">Volver al inicio</button></a>
		</div>
	  </div>
	</div>
</section>

@endsection

@section('scripts')
<script>
	$(document).ready( function () {
	    $('#categorias').DataTable({
	        "processing": true,
	        "serverSide": true,
	        "autoWidth": false,
	        "ajax": "/obtenerCategorias",
	        "columns": [
	            {data:'name'},
	            {data:'description'},
	            {data:'color',orderable:false, searchable:false},
	            {data:'edit',orderable:false, searchable:false},
	            {data:'delete',orderable:false, searchable:false}
	        ],
	        language: {
	          "decimal": "",
	          "emptyTable": "No hay información",
	          "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
	          "infoEmpty": "Mostrando 0 to 0 of 0 Documentos",
	          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
	          "infoPostFix": "",
	          "thousands": ",",
	          "lengthMenu": "Mostrar _MENU_ Registros",
	          "loadingRecords": "Cargando...",
	          "processing": "Procesando...",
	          "search": "Buscar:",
	          "zeroRecords": "Sin resultados encontrados",
	          "paginate": {
	              "first": "Primero",
	              "last": "Ultimo",
	              "next": "Siguiente",
	              "previous": "Anterior"
	          }
	        }
	    });
	  });
</script>
@endsection