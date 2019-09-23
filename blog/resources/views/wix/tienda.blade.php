@extends('plantillas.plantilla_1')

@section('titulo','Tienda')
@section('contenido')
<div class="row">
	<div class="col">
		<h2 class="titulo"><p>TIENDA</p></h2>
	</div>
</div>
@for($i=0;$i<3;$i++)
<div class="row justify-content-md-center">
	<a href="{{route('detallesproducto')}}">
	<div class="col-lg-2">
		<div class="img-tienda" >
			<img class="img-fluid" src="img/img1.webp">
			<div class="pre-img-tienda">
			<p class="txt-img-tienda">Vista Rapida</p>
		</div>
		</div>
		
		<p class="precio">Soy un producto <br>
			$100.00 MXN
		</p>
	</a>
	</div>
	<div class="col-lg-2">
		<a href="{{route('detallesproducto')}}">
		<div class="img-tienda" >
			<img class="img-fluid" src="img/img2.jpg">
			<div class="pre-img-tienda">
			<p class="txt-img-tienda">Vista Rapida</p>
		</div>
		</div>
		<p class="precio">Soy un producto <br>
			$100.00 MXN
		</p>
	</a>
	</div>
		<div class="col-lg-2">
			<a href="{{route('detallesproducto')}}">
		<div class="img-tienda" >
			<img class="img-fluid" src="img/img3.jpg">
			<div class="pre-img-tienda">
			<p class="txt-img-tienda">Vista Rapida</p>
		</div>
		</div>
		<p class="precio">Soy un producto <br>
			$100.00 MXN
		</p>
	</a>
	    </div>
	<div class="col-lg-2">
		<a href="{{route('detallesproducto')}}">
		<div class="img-tienda" >
			<img class="img-fluid" src="img/img4.jpg">
			<div class="pre-img-tienda">
			<p class="txt-img-tienda">Vista Rapida</p>
		</div>
		</div>
		<p class="precio">Soy un producto <br>
			$100.00 MXN
		</p>
	</a>
	</div>	
</div>

@endfor
@endsection