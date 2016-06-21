@extends('layouts.app-orange')
@section('content')
<div class="container-fluid text-center">
  <div class="page-header">
    <h3><i class="fa fa-shopping-cart"></i> Detalle del Producto</h3>
  </div>

  <articule class="row">
    <div class="col-md-6">
      <div class="product-block">
        <img src="../recursos/img/products/{{$product->image}}" width="300">
      </div>
    </div>
    <div class="col-md-6">
      <div class="product-block">
        <h4>{{ $product->name }}</h4><hr>
        <div class="product-info panel panel-body">
          <p> {{ $product->description }} </p>
          @if(!Auth::guest())
            <span class="btn btn-success">Precio: $ {{number_format($product->price,2)}}</span>
          @endif
          <span>
            <a class="btn btn-primary" href="{{ route('cart-add',$product->slug) }}"><i class="fa fa-cart-plus"></i> Lo quiero</a>            
          </span>
          <span>
            <a class="btn btn-info" href="{{route('welcome')}}"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
          </span>
        </div>
      </div>
    </div>
  </articule>
</div>
@stop
