@extends('plantillas.admin')

@section('titulo','Nuevo Producto')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br>
		<h2>Lista de Productos</h2>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Img</th>
				<th>Producto</th>
				<th>Costo</th>
				<th>Marca</th>
				<th>Cantidad</th>
				<th>Categoría</th>
			</tr>
			@foreach($productos as $producto)
                    <tr>
                    	<td>{{$loop->index+1}}</td>
                    	<td><img class="img-fluid img-producto" src="{{asset('/img/'.$producto->img)}}"></td>
                    	<td>{{$producto->nombre}}</td>
                    	<td>{{$producto->costo}}</td>
                    	<td>{{$producto->marca}}</td>
                    	<td>{{$producto->cantidad}}</td>
                    	<td>{{$producto->categoria_id}}</td>
                    	<td>
                          <button type="button" class="btn btn-outline-info detalles-producto">Detalles</button></td>
                    </tr>

			@endforeach
		</table>
<div class="modal" id="producto-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalles del producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	</div>
</div>

@endsection