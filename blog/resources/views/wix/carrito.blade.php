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
		<tr class="text-center">
			<th>#</th>
			<th>IMG</th>
			<th>PRODUCTO</th>
			<th>CANTIDAD</th>
			<th>COSTO UNITARIO</th>
			<th>COSTO TOTAL</th>
			<th>ELIMINAR</th>
			</tr>
			@php
			$productos=$carritos->productos->unique('id');
		$tf=0;	
			@endphp
			<!--sacando el numero de productos eliminando los repetidos-->
			@foreach($productos as $producto)
			<tr>
				<td>{{($loop->index+1)}}</td>
				<td class="producto-img text-center"><img class="img-fluid img-producto" src="{{asset('/img/'.$producto->img)}}" alt="{{$producto->descripcion}}"></td>
				<td  class="text-center">{{$producto->nombre}}</td>
				<td  class="text-center">
@php
					$pf=$carritos->productos->where('id',$producto->id);
					$contador=$pf->count();
					echo $contador;
@endphp 
<!--Cantidad de productos totales -->
				
				</td>
				<td  class="text-center">${{number_format($producto->costo,2)}} MXN</td>
				@php
				$total=$contador*$producto->costo;
				$tf=$tf+$total;
				@endphp
				<!--Este es para tener el precio total de todos los productos $tf-->
				<td  class="text-center">${{number_format($total,2)}} MXN</td>
				<td class="text-center"><a class="btn btn-danger" href="{{route('eliminar.producto',$producto->id)}}" role="button">Eliminar</a></td>
			</tr>
@endforeach
			<tr class="text-center">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="text-center">
					<b>TOTAL A PAGAR</b>
				</td>
				<td>
					${{number_format($tf,2)}} MXN<!--Imprime el costo total final de todos los productos -->
				</td>
				<td></td>
			</tr>
		</table>
	</div>
</div>

@endsection