@extends('plantillas.plantilla_1')
@section('titulo','Carrito')
@section('contenido')
<div class="container">
	<br><br><br><br>
	<div class="row justify-content-md-center">
		<div class="col">
		<h2>TU GUARDAROPA</h2>
		<!--VISTA PARA EL CARRITO PARA VER LOS PRODUCTOS
		 QUE PODREMOS GUARDAR YA SEA AGRUPADO O UNO POR UNO 
		 EN ESTE CASO SERA UNO POR UNO-->

		</div>
	</div>
	<div class="row justify-content-md-center">
		<table class="table">
		<tr>
			<th>#</th>
			<th>IMG</th>
			<th>PRODUCTO</th>
			<th>CANTIDAD</th>
			<th>COSTO</th>
			<th>ELIMINAR</th>
			</tr>
			@foreach($carritos->productos as $producto)
			<tr>
				<td>{{($loop->index+1)}}</td>
				<td>{{$producto->img}}</td>
				<td>{{$producto->nombre}}</td>
				<td></td>
				<td>{{$producto->costo}}</td>
				<td></td>
			</tr>
@endforeach
		</table>
	</div>
</div>

@endsection