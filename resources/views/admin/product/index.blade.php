@extends('layouts.admin')
@section('main-content')
	<div class="box">
        <div class="box-header">
        	<h3 class="box-title">
        		<i class="fa fa-cog"></i> Productos [Lista de Productos] 
        	</h3>
        </div><!-- /.box-header -->
        <span><a href="{{ route('admin.product.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Producto</a></span>
        <div class="box-body">
        	<div class="table-responsive">
		        <table id="productTable" class="table table-bordered table-striped">
		        	<thead>
		            	<tr>
		                    <!--th>ID</th-->
		                    <th>Imagen</th>
		                    <th>Codigo</th>
		                    <th>Nombre</th>
		                    <!--th>Categoria</th>
		                    <th>Slug</th>
		                    <th>Descripcion</th-->
		                    <th>Descripción corta</th>
		                    <th>Cantidad</th>
		                    <!--th>Precio</th>
		                    <th>Activo</th-->
		                    <th>Eliminar</th>
		                    <th>Editar</th>
		                </tr>
		            </thead>
		            <tbody>
						@foreach ($products as $product)
							<tr>
								<!--td>
									{{$product->id}}
								</td-->
								<td>
									<img src="../recursos/img/products/{{ $product->image }}" width="40" alt="">
								</td>
								<td>
									{{$product->code}}
								</td>
								<td>
									{{$product->name}}
								</td>
								<!--td>
									{{$product->category->name}}
								</td>
								<td>
									{{$product->slug}}
								</td>
								<td>
									{{$product->description}}
								</td-->
								<td>
									{{$product->stract}}
								</td>
								<td>
									{{number_format($product->quantity)}}
								</td>
								<!--td>
									${{number_format($product->price,2)}}
								</td>
								<td>
									{{$product->visible == 1 ? 'Si':'No' }}
								</td-->
								<td>
									{!! Form::open(['route'=>['admin.product.destroy',$product->slug],'method'=>'DELETE']) !!}
									<button onclick="return confirm('¿Eliminar Registro?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
									{!! Form::close() !!}
								</td>
								<td>
									<a href="{{ route('admin.product.edit',$product->slug) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop