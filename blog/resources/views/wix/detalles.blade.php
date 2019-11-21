@extends('plantillas.plantilla_1')
@section('titulo','Detalles del producto')
@section('contenido')

<div class="row justify-content-md-center">
	<div class="col-4 ">
		<nav id="bread1" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/wix">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/tienda">Tienda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalles</li>
  </ol>
</nav>
<div id="img_detalles">
<img class="img-fluid" src="{{asset('img/'.$producto->img)}}"> 
</div>

	</div>
	<div class="col-4">
		<br><br><br><br>
		<p>
			<h3>{{$producto->nombre}}</h3>
		Costo: ${{number_format($producto->costo,2)}} MXN
		</p>
		Stock: <label id="stock">{{$producto->cantidad}}</label>
		<br>
		<form method="post" action="{{route('tienda.store')}}">
			@csrf()
			<input type="hidden" name="id_producto" value="{{$producto->id}}">
		<input id="Cantidad" class="form-control" type="number" name="Cantidad" value="1" size="3" >
		<div class="invalid-feedback">
			Stock Insuficiente
		</div>
		<br><br>
		<button type="submit" class="btn btn-lg btn-block btn-primary">AGREGAR AL CARRITO</button>
		<p>
			<h5>INFORMACIÓN DEL PRODUCTO</h5>
		</p>
		<hr>
		<p class="text-justify">
		{{$producto->descripcion}}
		</p>
	</div>
	
</div>
<div id="img-full" >
	<img src="{{asset('img/'.$producto->img)}}">
</div>

@endsection