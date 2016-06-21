<section class="container">
	<h4>{{$category->name}}</h4> <span class="btn btn-bayusa"><span class="badge">{{$category->replies->count()}}</span> - Subcategorias </span>
	@foreach($categories as $menu)
		@if($menu->replies->count())
			<div class="row alert alert-success">
				<i class="fa fa-level-down" aria-hidden="true"></i> {{$menu->name}} (<span class="badge">{{ $menu->products->count()}}</span> - Productos)
			</div>
			<div class="row">
				@foreach($menu->products as $product)
						<div  class="col-xs-12 col-sm-6 col-md-4">
							<div class="thumbnail center-block" style="height: 150;">
								<div class="center-block" style="width: 150; height: 150;">
									<img src="{{ asset('recursos/img/products/'.$product->image) }}" style="max-width: 150px; max-height: 150px;" class="img-thumbnail img-responsive" alt="{{ $product->name }}">
									<div class="center-block">
									@if(!Auth::guest())
										<span class="btn btn-success">Precio: $ {{number_format($product->price,2)}}</span>
									@endif
									</div>
								</div>
								<hr>
								<div class="caption text-center" style="height: 100px">
									<spam>{{$product->stract}}</spam>
									<hr>
									<div class="text-center">
										<a class="btn btn-bayusa" href="{{ route('cart-add',$product->slug) }}"><i class="fa fa-cart-plus"></i> <spam class="hidden-xs hidden-sm">Lo quiero</spam></a>
										<a class="btn btn-warning" href="{{ route('product-datail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> <spam class="hidden-xs hidden-sm"> Leer más </spam> </a>
									</div>
								</div>
							</div>
						</div>
				@endforeach
			</div>
			<div class="container">
				@foreach($menu->replies as $submenu)
					<div class="row alert alert-success">
						<i class="fa fa-hashtag" aria-hidden="true"></i> {{$submenu->name}} (<span class="badge">{{ $submenu->products->count() }}</span> - Productos)
					</div>
					<div class="row">
						@foreach($submenu->products as $product)
						<div  class="col-xs-12 col-sm-6 col-md-4">
							<div class="thumbnail center-block" style="height: auto;">
								<div class="center-block" style="width: 150px; height: auto;">
									<img src="{{ asset('recursos/img/products/'.$product->image) }}" style="max-width: 150px; max-height: 150;" class="img-thumbnail img-responsive" alt="{{ $product->name }}">
									<div class="center-block">
									@if(!Auth::guest())
										<span class="btn btn-success">Precio: $ {{number_format($product->price,2)}}</span>
									@endif
									</div>
								</div>
								<hr>
								<div class="caption text-center" style="height: 100px">
									<spam>{{$product->stract}}</spam>
									<hr>
									<div class="text-center">
										<a class="btn btn-bayusa" href="{{ route('cart-add',$product->slug) }}"><i class="fa fa-cart-plus"></i> <spam class="hidden-xs hidden-sm">Lo quiero</spam></a>
										<a class="btn btn-warning" href="{{ route('product-datail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> <spam class="hidden-xs hidden-sm"> Leer más </spam> </a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				@endforeach
			</div>
		@else
		<div class="row alert alert-success">
			<i class="fa fa-minus-square-o" aria-hidden="true"></i> {{$menu->name}} (<span class="badge">{{ $menu->products->count() }}</span> - Productos)
		</div>
		<div class="row">
			@foreach($menu->products as $product)
				<div  class="col-xs-12 col-sm-6 col-md-4">
					<!--span>{{$product->name}}</span><hr-->
					<div class="thumbnail center-block" style="height: auto;">
						<div class="center-block" style="width: 150px; height: auto;">
							<img src="{{ asset('recursos/img/products/'.$product->image) }}" style="max-width: 150px; max-height: auto" class="img-thumbnail img-responsive" alt="{{ $product->name }}">
							<div class="center-block">
							@if(!Auth::guest())
								<span class="btn btn-success">Precio: $ {{number_format($product->price,2)}}</span>
							@endif
							</div>
						</div>
						<hr>
						<div class="caption text-center" style="height: 100px">
							<spam>{{$product->stract}}</spam>
							<hr>
							<div class="text-center">
								<a class="btn btn-bayusa" href="{{ route('cart-add',$product->slug) }}"><i class="fa fa-cart-plus"></i> <spam class="hidden-xs hidden-sm">Lo quiero</spam></a>
								<a class="btn btn-warning" href="{{ route('product-datail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> <spam class="hidden-xs hidden-sm"> Leer más </spam> </a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		@endif	
	@endforeach
</section>