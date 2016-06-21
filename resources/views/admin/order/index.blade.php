@extends('layouts.admin')
@section('main-content')
	<div class="box">
        <div class="box-header">
        	<h3 class="box-title">
        		<i class="fa fa-cog"></i> Ordenes PayPal [Lista de Ordenes]
        	</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<div class="table-responsive">
		        <table id="categoryTable" class="table table-bordered table-striped">
		        	<thead>
		            	<tr>
		                    <th>ID</th>
		                    <th>Cliente</th>
		                    <th>Subtotal</th>
		                    <th>Gastos de envio</th>
		                    <th>Total</th>
		                    <th>Fecha</th>
		                    <th>Opciones</th>
		                </tr>
		            </thead>
		            <tbody>
						@foreach ($orders as $order)
							<tr>
								<td>
									{{$order->id}}
								</td>
								<td>
									{{$order->user->name." ".$order->user->last_name}}
								</td>
								<td>
									$ {{number_format($order->subtotal,2)}}
								</td>
								<td>
									$ {{number_format($order->shipping,2)}}
								</td>
								<td>
									$ {{number_format(($order->subtotal + $order->shipping),2)}}
								</td>
								<td>
									{{date('d/M/Y', strtotime($order->created_at))}}
								</td>
								<td>
									<a href="{{ route('admin.order.detail',$order->id) }}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop