@extends('plantillas.admin')

@section('titulo','Roles')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br>
		<table class="table table table-hover " >
			  <thead class="thead-dark">
			<tr>
				<th>#</th>
			<th>Roles</th>
			<th>Editar</th>
			<th>Eliminar</th>
		   </tr>
		</thead>
@foreach($roles as $rol)
          <tr>
          	<td>{{$loop->index+1}}</td>
          	<td>{{$rol->rol}}</td>
          	<td>
          		<a class="btn btn-primary" href="/roles/{{$rol->id}}/edit" role="button">Editar</a>
          	</td>
          	<td>
          		<form method="post" action="/roles/{{$rol->id}}">
          			@csrf
          			@method('DELETE')
          			<button type="submit" class="btn btn-danger">Eliminar</button>

          			
          		</form>
          	</td>
          </tr>
@endforeach

		</table>
