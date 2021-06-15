<form method="POST" action="/categorias-admin/{{$id}}">
	@method('DELETE')
	@csrf
	<a href="/categorias-admin/{{$id}}"><button class="button is-danger is-outlined"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
</form> 