@extends('plantillas.admin')

@section('titulo','Categorias')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br>
		<table class="table table table-hover " >
			  <thead class="thead-dark">
			<tr>
				<th>#</th>
			<th>Categorias</th>
			<th>Editar</th>
			<th>Eliminar</th>
		   </tr>
		</thead>
@foreach($categorias as $categoria)
          <tr>
          	<td>{{$loop->index+1}}</td>
          	<td>{{$categoria->nombre}}</td>
          	<td>
          		<a class="btn btn-primary" href="/categorias/{{$categoria->id}}/edit" role="button">Editar</a>
          	</td>
          	<td>
          		<form method="post" action="/categorias/{{$categoria->id}}">
          			@csrf
          			@method('DELETE')
          			<button type="submit" class="btn btn-danger">Eliminar</button>

          			
          		</form>
          	</td>
          </tr>
@endforeach

		</table>


	</div>
</div>

@endsection
