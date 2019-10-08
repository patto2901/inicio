@extends('plantillas.admin')

@section('titulo','Nuevo Producto')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br>
		<form method="post" enctype="multipart/form-data" action="/productos">
			@csrf
  <div class="form-group">
    <label for="nombre">Producto</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Producto">
  </div>
   <div class="form-group">
    <label for="costo">Costo</label>
    <input type="number" class="form-control" id="costo" name="costo">
  </div>
   <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" id="descripcion" name="descripcion"rows="3"></textarea>
  </div>
   <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" id="marca" name="marca">
  </div>
   <div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="form-group">
    <label for="categoria_id">Categoria</label>
    <select class="form-control" id="categoria_id" name="categoria_id">
      <option value="0">Selecciona una categoria</option>
      @foreach($categorias as $categoria)
      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
      @endforeach
    </select>
  </div>
   <div class="form-group">
    <label for="img">Imagen</label>
    <input type="file" class="form-control" id="img" name="img">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>
</div>
</div>

@endsection