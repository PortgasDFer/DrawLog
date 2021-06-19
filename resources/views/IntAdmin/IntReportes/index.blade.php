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
					    		<th>Denuncia</th>
					    		<th>Revisar</th>
				    		</tr>
				    	</thead>
				    	<tbody>
			    			<tr>
			    				<td>Luffy2010</td>
			    				<td>
			    					<figure class="image is-64x64">
										  <img src="https://bulma.io/images/placeholders/128x128.png">
										</figure></td>
			    				<td>SIN REVISAR</td>
			    				<td>Im210</td>
			    				<td><button class="button is-link is-outlined"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
			    			</tr>
			    			<tr>
			    				<td>Luffy2010</td>
			    				<td>
			    					<figure class="image is-64x64">
										  <img src="https://bulma.io/images/placeholders/128x128.png">
										</figure></td>
			    				<td>SIN REVISAR</td>
			    				<td>Im210</td>
			    				<td><button class="button is-link is-outlined"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
			    			</tr>
			    			<tr>
			    				<td>Luffy2010</td>
			    				<td>
			    					<figure class="image is-64x64">
										  <img src="https://bulma.io/images/placeholders/128x128.png">
										</figure></td>
			    				<td>SIN REVISAR</td>
			    				<td>Im210</td>
			    				<td><button class="button is-link is-outlined"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
			    			</tr>
			    			<tr>
			    				<td>Luffy2010</td>
			    				<td>
			    					<figure class="image is-64x64">
										  <img src="https://bulma.io/images/placeholders/128x128.png">
										</figure></td>
			    				<td>SIN REVISAR</td>
			    				<td>Im210</td>
			    				<td><button class="button is-link is-outlined"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
			    			</tr>
			    			<tr>
			    				<td>Luffy2010</td>
			    				<td>
			    					<figure class="image is-64x64">
										  <img src="https://bulma.io/images/placeholders/128x128.png">
										</figure></td>
			    				<td>SIN REVISAR</td>
			    				<td>Im210</td>
			    				<td><button class="button is-link is-outlined"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
			    			</tr>
			    			<tr>
			    				<td>Luffy2010</td>
			    				<td>
			    					<figure class="image is-64x64">
										  <img src="https://bulma.io/images/placeholders/128x128.png">
										</figure></td>
			    				<td>SIN REVISAR</td>
			    				<td>Im210</td>
			    				<td><button class="button is-link is-outlined"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
			    			</tr>
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

@endsection