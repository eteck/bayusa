@extends('layouts.admin')
@section('main-content')
	<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">
        		<i class="fa fa-cog"></i> Prductos [Editar Producto]
        	</h3>
        </div>
		@if(count($errors) > 0)
			@include('admin.partials.errors')
		@endif
        <div class="box-body">

            {!!Form::model($product,['route'=>['admin.product.update',$product->slug],'method'=>'PUT','files'=>true])!!}

                <div class="form-group">
                    {!! Form::Label('Categoria: ') !!}
                    {!! Form::select(
                        'category_id',
                        $categorias,
                        null,
                        ['class'=>'form-control']
                    )!!}
                </div>

            	<div class="form-group">
            		
            		{!! Form::Label('Nombre: ') !!}
            		{!! Form::text(
            			'name',
            			null,
            			array(
            				'class'=>'form-control',
            				'required'=>'required',
							'placeholder'=>'Nombre Producto',
							'autofocus'=>'autofocus'
            			)
            		) !!}
            	</div>
                
                <div class="form-group">
                    
                    {!! Form::Label('Imagen: ') !!}
                    {!! Form::file('image') !!}
                </div>
            	
                <div class="form-group">
            		{!! Form::Label('Description: ') !!}
            		{!! Form::textarea(
            			'description',
            			null,
            			array(
            				'class'=>'form-control',
                            'style'=>'width: 100%; height: 50px;',
            				'required'=>'required',
							'placeholder'=>'Descripción Producto'
            			)
            		) !!}
            	</div>

                <div class="form-group">
                    {!! Form::Label('Extracto: ') !!}
                    {!! Form::textarea(
                        'stract',
                        null,
                        array(
                            'class'=>'form-control',
                            'style'=>'width: 100%; height: 50px;',
                            'required'=>'required',
                            'placeholder'=>'Extracto del Producto'
                        )
                    ) !!}
                </div>
                
            	<div class="form-group">
                    
                    {!! Form::Label('Cantidad: ') !!}
                    {!! Form::text(
                        'quantity',
                        null,
                        array(
                            'class'=>'form-control',
                            'required'=>'required',
                            'placeholder'=>'Cantidad'
                        )
                    ) !!}
                </div>

                <div class="form-group">
                    
                    {!! Form::Label('Precio: ') !!}
                    {!! Form::text(
                        'price',
                        null,
                        array(
                            'class'=>'form-control',
                            'required'=>'required',
                            'placeholder'=>'Precio'
                        )
                    ) !!}
                </div>

                <div class="form-group">
                    <label for="visible">Visible: </label>
                    <input type="checkbox" name="visible" {{$product->visible == 1 ? "checked='checked'":''}}>
                </div>

            	<div class="form-group">
            		{!! Form::submit('Actualizar',array('class'=>'btn btn-primary')) !!}
            		<a href="{{ route('admin.product.index') }}" class="btn btn-warning">Cancelar</a>
            	</div>
			{!!Form::close()!!}
        </div>
    </div>
@stop