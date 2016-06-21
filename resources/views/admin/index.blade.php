@extends('layouts.admin')
@section('main-content')

	<div class="container">
		<div class="page-header">
			<h3><i class="fa fa-cogs fa5"></i> Bayusa | Panel de configuración</h3>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<h3>
						<i class="fa fa-list-alt icon-home"></i>
						<a href="{{ route('admin.category.index') }}">Categorias</a>
					</h3>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel">
					<h3>
						<i class="fa fa-suitcase icon-home"></i>
						<a href="{{ route('admin.product.index') }}">Productos</a>
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<h3>
						<i class="fa fa-cc-paypal icon-home"></i>
						<a href="{{ route('admin.order.index') }}">Pedidos</a>
					</h3>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel">
					<h3>
						<i class="fa fa-list-alt icon-home"></i>
						<a href="{{ route('admin.user.index') }}">Usuarios</a>
					</h3>
				</div>
			</div>
		</div>
		
	</div>
@stop