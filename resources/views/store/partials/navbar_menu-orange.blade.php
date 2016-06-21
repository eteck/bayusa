<header>
  <div class="container-fluid header-deving">
    <div class="row">
      <img src="{{ asset('recursos/img/pleca-bayusa-orange.png') }}" style="max-height: 100px;" class="img-responsive">
    </div>
  </div>
  <nav class="navbar navbar-bayusa" data-spy="affix" data-offset-top="197">
      <div class="container-fluid">
          <div class="navbar-header">
            
            <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                <img alt="Bayusa" style="width: 40px; display: inline;" src="{{asset('recursos/img/logo/logo_mini.png')}}">
                  <span class="titulo-logo">Bayusa <spam class="hidden-sm">de México</span></spam>
              </a>

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

              
          </div>
        
          <div ng-controller="MenuController" class="collapse navbar-collapse" id="app-navbar-collapse" aria-expanded="false" style="height: 1px;">
              <!-- Left Side Of Navbar -->

              <ul class="nav navbar-nav">
                <li >
                  <a href="{{ url('/') }}"><i class="fa fa-home"></i> <spam class="hidden-sm hidden-md">INICIO</spam></a>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cart-arrow-down"></i> <spam class="hidden-sm hidden-md">CATEGORIAS</spam> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li ng-repeat="categoria in categories.menu"> <a href="{{url('menu/@[[categoria.id]]')}}"> @[[categoria.name]] </a> </li>
                  </ul>
                </li>

                <li>
                  <a href="{{ route('conocenos') }}"><i class="fa fa-info"></i> <spam class="hidden-sm hidden-md">CONOCENOS</spam></a>
                </li>

                <li>
                  <a href="{{ route('politicas') }}" ><i class="fa fa-gavel"></i> <spam class="hidden-sm hidden-md">POLITICAS DE VENTA</spam></a>
                </li>

                <!--li>
                  <a href="{{ route('promociones') }}"><i class="fa fa-star"></i> <spam class="hidden-sm hidden-md">PROMOCIONES</spam></a>
                </li-->

                <li>
                  <a href="{{ asset('recursos/files/catalogo.pdf') }}" target="_blank"><i class="fa fa-star"></i> <spam class="hidden-sm hidden-md">CATALOGO</spam></a>
                </li>
                
                <li>
                  <a href="{{ route('contacto') }}"><i class="fa fa-envelope"></i> <spam class="hidden-sm hidden-md"> CONTACTO </spam></a>
                </li>
                
                
                
              </ul>
              
              <!--form class="navbar-form navbar-left" role="search">
                <div class="form-group" style="background-color: @[[color]] !important;">
                  <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form-->
              

              <!-- Right Side Of Navbar -->
              <!-- Select Font -->
                  
              <ul class="nav navbar-nav navbar-right">
                  
                <li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>                  

                <!-- Authentication Links -->
                    
                @if (Auth::guest())
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          <span class="glyphicon glyphicon-user" aria-hidden="true"></spam>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/login') }}" ><i class="fa fa-btn fa-sign-in"></i> Iniciar</a></li>
                          <li>
                            <a href="{{ url('/register') }}">
                              <i class="fa fa-pencil"></i> Registro
                            </a>
                          </li>
                        </ul>
                      </li>

                @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->username }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>
</header>