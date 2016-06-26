@extends('layouts.app-orange')
@section('content')
	<div class="container text-center">
		@if(!Auth::guest())
		<div class="page-header">
			<h3><i class="fa fa-shopping-cart">Resumen del Pedido</i></h3>
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
				<h3>Datos del Pedido</h3>
				<table class="table tables-triped table-hover table-bordered">
					<thead>
						<tr>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
							<tr>
								<td>{{ $item->name }}</td>
								<td>{{ number_format($item->price,2) }}</td>
								<td>{{ $item->quantity }}</td>
								<td>{{ number_format($item->price * $item->quantity,2) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: $ {{number_format($total,2)}}
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"> Regresar</i>
					</a>
					<a href="{{ route('order-request') }}" class="btn btn-info">
						<i class="fa fa-chevron-circle-right"> Solicitar Pedido</i>
					</a>
					<a href="{{ route('payment') }}" class="btn btn-warning">
						<i class="fa fa-cc-paypal"> Paypal</i>
					</a>
				</p>

			</div>
			
		</div>
		@else
			<h3><span class="label label-warning">Es necesario registrarse para confirmar su pedido</span></h3>
		@endif
	</div>
@stop