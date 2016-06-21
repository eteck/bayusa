@extends('layouts.admin')
@section('main-content')
	<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">
        		<i class="fa fa-cog"></i> Categorias [Editar Categoria]
        	</h3>
        </div>
		@if(count($errors) > 0)
			@include('admin.partials.errors')
		@endif
        <div class="box-body">

            {!!Form::model($category,['route'=>['admin.category.update',$category],'method'=>'PUT'])!!}
            	<div class="form-group">
            		
            		{!! Form::Label('Nombre: ') !!}
            		{!! Form::text(
            			'name',
            			null,
            			array(
            				'class'=>'form-control',
            				'required'=>'required',
							'placeholder'=>'Nombre categoria',
							'autofocus'=>'autofocus'
            			)
            		) !!}
            	</div>

            	<div class="form-group">
            		{!! Form::Label('Description: ') !!}
            		{!! Form::textarea(
            			'description',
            			null,
            			array(
            				'class'=>'form-control',
            				'required'=>'required',
							'placeholder'=>'Descripción categoria'
            			)
            		) !!}
            	</div>

            	<div class="form-group">
            		{!! Form::Label('Categoria: ') !!}
            		{!! Form::select(
            			'parent_id',
						$categorias_padre,
						null,
						['class'=>'form-control']
            		)!!}
            	</div>

            	<div class="form-group">
            		{!! Form::submit('Actualizar',array('class'=>'btn btn-primary')) !!}
            		<a href="{{ route('admin.category.index') }}" class="btn btn-warning">Cancelar</a>
            	</div>
			{!!Form::close()!!}
        </div>
    </div>
@stop