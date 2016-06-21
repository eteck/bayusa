<section class="container-fluid">
	<h4>{{$category->name}}</h4>
	<ul class="nav nav-pills">
		@foreach($categories as $menu)
			@if($menu->replies->count())
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cart-arrow-down"></i> {{$menu->name}} ({{$menu->repiles ? $menu->repiles->count() : 0 }})<span class="caret"></span></a>
					<ul class="dropdown-menu">
						@foreach($menu->replies as $submenu)
		                    	<li> <a href="{{route('submenu',$submenu->id)}}">{{$submenu->name}} ({{$submenu->products->count()}})</a></li>
		                @endforeach
                	</ul>
                </li>
			@else
				<li role="presentation">
					<a href="{{route('submenu',$menu->id)}}"><i class="fa fa-cart-arrow-down"></i> {{$menu->name}} ({{$menu->products->count()}})</a>
				</li>
			@endif
				
		@endforeach
	</ul>	
</section>
