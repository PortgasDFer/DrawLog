@extends('layouts.template')
@section('content')
<section class="hero is-link pt-4">
  <div class="hero-body">
    <p class="title">
      Reportes
    </p>
    <p class="subtitle">
      Revisa los reportes de la comunidad. 
    </p>
  </div>
</section>
<section>
	<div class="columns is-desktop">
	  <div class="column  is-two-thirds is-desktop is-fullwidth ">
	  		<div class="box">
	  			<div class="table-container">
				    <table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="reportes">
				    	<thead>
				    		<tr>
					    		<th>Usuario</th>
					    		<th>Ilustración</th>
					    		<th>Estado</th>
					    		<th>Revisar</th>
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
		  <hr>
		  <a href="/home"><button class="button is-link is-rounded is-fullwidth">Volver al inicio</button></a>
		</div>
	  </div>
	</div>
</section>

@endsection

@section('scripts')
<script>
	$(document).ready( function () {
	    $('#reportes').DataTable({
	        "processing": true,
	        "serverSide": true,
	        "autoWidth": false,
	        "ajax": "/obtenerReportes",
	        "columns": [
	            {data:'name'},
	            {data:'name_draw'},
	            {data:'estado'},
	            {data:'view',orderable:false, searchable:false}
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