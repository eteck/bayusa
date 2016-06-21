<section id="products" class="container-fluid text-center">
  @foreach($products as $product)
    <article class="product white-panel panel panel-body">
      <!--span>{{$product->name}}</span><hr-->
      <img src="../recursos/img/products/{{$product->image}}" class="thumbnail" alt="">
      <div class="panel panel-default">
        <div class="product-info panel-body">
          <p>{{$product->stract}}</p>
          @if(!Auth::guest())
            <h4><span class="label label-success">Precio: $ {{number_format($product->price,2)}}</span></h4>
          @endif
          <!--span><a class="btn btn-info" href="#"><i class="fa fa-search-plus"></i> Ver</a></span-->
          <hr>
          <span>
            <a class="btn btn-primary" href="{{ route('cart-add',$product->slug) }}"><i class="fa fa-cart-plus"></i> Lo quiero</a>
            <a class="btn btn-warning" href="{{ route('product-datail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> Leer más</a>
          </span>
        </div>
      </div>
    </article>
  @endforeach
</section>
