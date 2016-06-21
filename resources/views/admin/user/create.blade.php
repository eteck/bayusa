@extends('layouts.admin')
@section('main-content')
	<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">
        		<i class="fa fa-cog"></i> Usuarios [Crear Usuario]
        	</h3>
        </div>
		@if(count($errors) > 0)
			@include('admin.partials.errors')
		@endif
        <div class="box-body">

            {!!Form::open(['route'=>'admin.user.store','method'=>'POST'])!!}

                <div class="form-group">
            		
            		{!! Form::Label('Nombre: ') !!}
            		{!! Form::text(
            			'name',
            			null,
            			array(
            				'class'=>'form-control',
            				'required'=>'required',
							'placeholder'=>'Nombre(s)',
							'autofocus'=>'autofocus'
            			)
            		) !!}
            	</div>

                <div class="form-group">
                    
                    {!! Form::Label('Apellidos: ') !!}
                    {!! Form::text(
                        'last_name',
                        null,
                        array(
                            'class'=>'form-control',
                            'required'=>'required',
                            'placeholder'=>'Apellidos',
                            'autofocus'=>'autofocus'
                        )
                    ) !!}
                </div>

                <div class="form-group">
                    
                    {!! Form::Label('Dirección: ') !!}
                    {!! Form::textarea(
                        'address',
                        null,
                        array(
                            'class'=>'form-control',
                            'required'=>'required',
                            'placeholder'=>'Dirección [Calle No CP. colonia, estado, referencias]',
                            'autofocus'=>'autofocus'
                        )
                    ) !!}
                </div>
            	
                <div class="form-group">
            		{!! Form::Label('Usuario: ') !!}
            		{!! Form::text(
            			'username',
            			null,
            			array(
            				'class'=>'form-control',
                            'style'=>'width: 100%; height: 50px;',
            				'required'=>'required',
							'placeholder'=>'Usuario..'
            			)
            		) !!}
            	</div>

                <div class="form-group">
                    {!! Form::Label('Password: ') !!}
                    {!! Form::password(
                        'password',
                        array(
                            'class'=>'form-control',
                            'style'=>'width: 100%; height: 50px;',
                            'required'=>'required',
                            'placeholder'=>'Password'
                        )
                    ) !!}
                </div>

                <div class="form-group">
                    {!! Form::Label('Confirma tu Password: ') !!}
                    {!! Form::password(
                        'password_confirmation',
                        array(
                            'class'=>'form-control',
                            'style'=>'width: 100%; height: 50px;',
                            'placeholder'=>'Confirma tu Password'
                        )
                    ) !!}
                </div>

                <div class="form-group">
                    {!! Form::Label('Correo: ') !!}
                    {!! Form::text(
                        'email',
                        null,
                        array(
                            'class'=>'form-control',
                            'style'=>'width: 100%; height: 50px;',
                            'required'=>'required',
                            'placeholder'=>'E-Mail'
                        )
                    ) !!}
                </div>
                
                <div class="form-group">
                    
                    {!! Form::Label('Rol: ') !!}
                    {!! Form::select(
                        'role',
                        $roles,
                        null,
                        ['class'=>'form-control',
                            'required'=>'required']
                    ) !!}

                </div>

            	<div class="checkbox">
                    
                    <label> 
                        {!! Form::checkbox('active',null,true) !!} Activo
                    </label>
                </div>

            	<div class="form-group">
            		{!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}
            		<a href="{{ route('admin.product.index') }}" class="btn btn-warning">Cancelar</a>
            	</div>
			{!!Form::close()!!}
        </div>
    </div>
@stop