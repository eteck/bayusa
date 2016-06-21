@extends('layouts.admin')
@section('main-content')
	<div class="container-fluid text-center">
		<div class="page-header">
			<h3><i class="fa fa-shopping-cart"> Resumen del Pedido</i></h3>
		</div>

		<div class="page">
			
			<div class="table-responsibe">
				<h3>Datos del usuario</h3>
				<table class="table table-stripe table-hover table-bordered">
					<tr>
						<td>Nombre: </td>
						<td>{{ $order->user->name." ". $order->user->last_name }}</td>
					</tr>
					<tr>
						<td>Usuario: </td>
						<td>{{ $order->user->username }}</td>
					</tr>
					<tr>
						<td>Correo: </td>
						<td>{{ $order->user->email }}</td>
					</tr>
					<tr>
						<td>Dirección: </td>
						<td>{{ $order->user->address }}</td>
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
						@foreach($order->order_items as $item)
							<tr>
								<td>{{ $item->product->name }}</td>
								<td>{{ number_format($item->price,2) }}</td>
								<td>{{ $item->quantity }}</td>
								<td>{{ number_format($item->price * $item->quantity,2) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: $ {{number_format($order->subtotal,2)}}
					</span>
				</h3><hr>
			</div>
			<a href="{{ route('admin.order.index') }}" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i> Regresar</a>
		</div>
	</div>
@stop