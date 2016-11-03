@extends('layouts.admin')
@section('main-content')
	<div class="box">
        <div class="box-header">
        	<h3 class="box-title">
        		<i class="fa fa-cog"></i> Usuarios [Lista de Usuarios] 
        	</h3>
        </div><!-- /.box-header -->
        <span>
        	<a href="{{ route('admin.user.create') }}" class="btn btn-warning">
        		<i class="fa fa-user-plus"></i> 
        		Usuario
        	</a>
        </span>
        <div class="box-body">
        	<div class="table-responsive">
		        <table id="userTable" class="table table-bordered table-striped">
		        	<thead>
		            	<tr>
		                    <th>Nombre</th>
		                    <th>Apellidos</th>
		                    <th>dirección</th>
		                    <th>usuario</th>
		                    <th>Correo</th>
		                    <th>Tipo</th>
		                    <th>Activo</th>
		                    <th>Eliminar</th>
		                    <th>Editar</th>
		                </tr>
		            </thead>
		            <tbody>
						@foreach ($users as $user)
							<tr>
								<td>
									{{$user->name}}
								</td>
								
								<td>
									{{$user->last_name}}
								</td>

								<td>
									{{$user->address}}
								</td>
								
								<td>
									{{$user->username}}
								</td>

								<td>
									{{$user->email}}
								</td>
								
								<td>
									{{ $user->rol->name }}
								</td>
								
								<td>
									{{$user->active == 1 ? 'Si':'No' }}
								</td>
								<td>
									{!! Form::open(['route'=>['admin.user.destroy',$user],'method'=>'DELETE']) !!}
									<button onclick="return confirm('¿Eliminar Registro?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
									{!! Form::close() !!}
								</td>
								<td>
									<a href="{{ route('admin.user.edit',$user) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop