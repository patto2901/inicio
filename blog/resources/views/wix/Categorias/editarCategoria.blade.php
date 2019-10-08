@extends('plantillas.admin')

@section('titulo','Nueva Categoria')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br>
		<h2>Nueva Categoria</h2>
		<form method="post" action="/categorias/{{$categoria->id}}">
			<!--si no ponemos eso nos marca error-->
			@csrf
			@method('PUT')
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" id="categoria" name="nombre" placeholder="Nombre de la Categoria" value="{{$categoria->nombre}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
	</div>
</div>
 

@endsection