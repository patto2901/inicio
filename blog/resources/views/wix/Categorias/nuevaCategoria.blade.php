@extends('plantillas.admin')

@section('titulo','Nueva Categoria')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br>
		<h2>Nueva Categoria</h2>
		<form method="post" action="/categorias">
			<!--si no ponemos eso nos marca error-->
			@csrf
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" id="categoria" name="nombre" placeholder="Nombre de la Categoria">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
	</div>
</div>
 

@endsection