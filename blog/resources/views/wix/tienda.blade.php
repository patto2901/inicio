@extends('plantillas.plantilla_1')

@section('titulo','Tienda')
@section('contenido')
<div class="row">
	<div class="col">
		<h2 class="titulo"><p>TIENDA</p></h2>
	</div>
</div>


<div class="row justify-content-md-center">

@foreach($productos as $producto)
	
	<div class="col-lg-2">
		<div class="img-tienda" >
			<a href="{{route('detallesProducto',['id_producto'=>$producto->id])}}">
			<img class="img-fluid" src="{{asset('img/'.$producto->img)}}"></a>
			<div class="pre-img-tienda">
			<p class="txt-img-tienda">Vista Rapida</p>
		</div>
		</div>
		
		<p class="precio">{{$producto->nombre}} <br>
			${{number_format($producto->costo,2)}} MXN
		</p>
	</div>
</div>
@endforeach
</div>
@endsection