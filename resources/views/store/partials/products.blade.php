<div class="row">
  @foreach($products as $product)
    <div  class="col-xs-12 col-sm-6 col-md-3">
      <!--span>{{$product->name}}</span><hr-->
      <div class="thumbnail center-block" style="height: 480px">
        <div class="center-block" style="width: 280px; height: 280px;">
          <img src="{{ asset('recursos/img/products/'.$product->image) }}" style="max-width: 280px; max-height: 280px" class="img-thumbnail img-responsive" alt="{{ $product->name }}">
          <!--img src="../recursos/img/products/{{$product->image}}" style="max-height: 250px; max-width: 350px"  class="img-responsive" alt="{{ $product->name }}"-->
        </div>
        <hr>
        <div class="caption" style="height: 100pxx">
          <spam>{{$product->stract}}</spam>
          @if(!Auth::guest())
            <span class="label label-success">Precio: $ {{number_format($product->price,2)}}</span>
          @endif
          <!--span><a class="btn btn-info" href="#"><i class="fa fa-search-plus"></i> Ver</a></span-->
          <hr>
          <div class="text-center">
            <a class="btn btn-primary" href="{{ route('cart-add',$product->slug) }}"><i class="fa fa-cart-plus"></i> <spam class="hidden-xs hidden-sm">Lo quiero</spam></a>
            <a class="btn btn-warning" href="{{ route('product-datail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> <spam class="hidden-xs hidden-sm"> Leer más </spam> </a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>