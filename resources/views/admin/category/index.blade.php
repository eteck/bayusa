@extends('layouts.admin')
@section('main-content')
	<div class="box">
        <div class="box-header">
        	<h3 class="box-title">
        		<i class="fa fa-cog"></i> Categorias [Lista de Categorias]
        	</h3>
        </div><!-- /.box-header -->
        <span><a href="{{ route('admin.category.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Categoria</a></span>
        <div class="box-body">
        	<div class="table-responsive">
		        <table id="categoryTable" class="table table-bordered table-striped">
		        	<thead>
		            	<tr>
		                    <th>ID</th>
		                    <th>Nombre</th>
		                    <th>Slug</th>
		                    <th>Descripcion</th>
		                    <th>Eliminar</th>
		                    <th>Editar</th>
		                </tr>
		            </thead>
		            <tbody>
						@foreach ($categorias as $categoria)
							<tr>
								<td>
									{{$categoria->id}}
								</td>
								<td>
									{{$categoria->name}}
								</td>
								<td>
									{{$categoria->slug}}
								</td>
								<td>
									{{$categoria->description}}
								</td>
								<td>
									{!! Form::open(['route'=>['admin.category.destroy',$categoria],'method'=>'DELETE']) !!}
									<button onclick="return confirm('¿Eliminar Registro?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
									{!! Form::close() !!}
								</td>
								<td>
									<a href="{{ route('admin.category.edit',$categoria) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop
