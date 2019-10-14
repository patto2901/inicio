@extends('plantillas.admin')
@section('titulo','Usuarios')

@section('contenido')
<div class="row">
	<div class="col">
		<br><br><br><br>
		<h2>Lista de Usuarios</h2>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Rol</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
			@foreach($usuarios as $usuario)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$usuario->nombre}}</td>
				<td>{{$usuario->correo}}</td>
				<td>{{$usuario->telefono}}</td>
				<td>{{$usuario->role->rol}}</td>
				<td><a class="btn btn-primary" href="">Editar</a></td>
				<td><a class="btn btn-danger" href="">Eliminar</a></td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

@endsection
