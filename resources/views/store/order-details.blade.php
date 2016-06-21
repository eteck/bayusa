@extends('layouts.app-orange')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart">Detalle del Producto</i></h1>
		</div>

		<div class="page">
			<div class="table-responsibe">
				<h3>Datos del usuario</h3>
				<table class="table table-stripe table-hover table-bordered">
					<tr>
						<td>Nombre: </td>
						<td>{{ Auth::user()->name. " " . Auth::user()->last_name }}</td>
					</tr>
					<tr>
						<td>Usuario: </td>
						<td>{{ Auth::user()->username }}</td>
					</tr>
					<tr>
						<td>Correo: </td>
						<td>{{ Auth::user()->email }}</td>
					</tr>
					<tr>
						<td>Dirección: </td>
						<td>{{ Auth::user()->address }}</td>
					</tr>
				</table>
			</div>
			<div class="table-responsibe">
				<table class="table tables-triped table-hover table-bordered">
					<thead>
						<tr>
							<th>Imegen</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
							<tr>
								<td><img src="{{ asset('recursos/img/products/'.$item->image) }}"></td>
								<td>{{ $item->name }}</td>
								<td>{{ number_format($item->price,2) }}</td>
								<td>
									<input 
										type="number" 
										min="25" 
										max="1000" 
										value="{{ $item->quantity }}" 
										id="product_{{ $item->id }}" >

									<a 
										href="#" 
										class="btn btn-warning btn-update-item" 
										data-href="{{ route('cart-update', $item->slug, $item->quantity)  }}" 
										data-id="{{ $item->id }}"
									>
										
										<i class="fa fa-refresh"></i>
									</a>
								</td>
								<td>{{ number_format($item->price * $item->quantity,2) }}</td>
								<td>
									<a href="{{ route('cart-delete',$item->slug) }}" class="btn btn-danger">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: $ {{number_format($total,2)}}
					</span>
				</h3>
			</div>
		</div>
	</div>
@stop