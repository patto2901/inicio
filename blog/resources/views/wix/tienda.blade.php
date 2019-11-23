@extends('plantillas.plantilla_1')

@section('titulo','Tienda')

@section('contenido')
<div class="container">
<br><br>
<div class="row">
	<div class="col">
		<form>
			<div class="form-group">
								<div class="dropdown">
				  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				   Categorias
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				  	 <a class="dropdown-item" href="{{route('tienda')}}">Todas</a>
				  	@foreach($categorias as $categoria)
				    <a class="dropdown-item" href="{{route('selectCategoria',$categoria->id)}}">{{$categoria->nombre}}</a>
				    @endforeach
				  </div>
				</div>
</div>
	<div class="col">
		<h2 class="titulo"><p>TIENDA</p></h2>
	</div>
</div>

<div class="row justify-content-md-center">
@foreach($productos as $producto)
	<div class="col-lg-3">
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

@endforeach
<div class="row justify-content-md-center">
	<br><br>
<div class="col">
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item"><a class="page-link" href="{{$productos->previousPageUrl()}}">Previous</a></li>
@for($i=0;$i<$productos->lastpage();$i++)
	    <li class="page-item"><a class="page-link" href="{{$productos->url($i+1)}}">{{$i+1}}</a></li>
@endfor
	    <li class="page-item"><a class="page-link" href="{{$productos->nextPageUrl()}}">Next</a></li>
	  </ul>
</nav>
</div>
<br><br>
</div>
</div>
</div>
</div>
@endsection