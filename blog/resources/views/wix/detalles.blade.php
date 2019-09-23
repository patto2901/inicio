@extends('plantillas.plantilla_1')
@section('titulo','Detalles del producto')
@section('contenido')

<div class="row justify-content-md-center">
	<div class="col-4 ">
		<nav id="bread1" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/wix">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/tienda">Tienda</a></li>
    <li class="breadcrumb-item active" aria-current="detalles">Detalles</li>
  </ol>
</nav>
<div id="img_detalles">
<img class="img-fluid" src="/img/dama.jpg"> 
</div>
	</div>
	<div class="col-4">
		<br><br><br><br>
		<p>
			<h3>Soy un Producto</h3>
		$300,00 MXN
		</p>
		Cantidad
		<br>
		<input id="Cantidad" type="number" name="Cantidad" value="1" size="3" >
		<br>
		<button type="button" class="btn btn-lg btn-block btn-dark">AGREGAR AL CARRITO</button>
		<p>
			<h5>INFORMACIÓN DEL PRODUCTO</h5>
		</p>
		<hr>
		haoalasmsjdjdjskakalsjdasjdjkd
		aksldldkdldlscdkwsksimdalkajwbefla
		lakdsjfnñakjsdn
	</div>
	
</div>

@endsection