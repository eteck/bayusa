<header>
  <nav class="navbar navbar-bayusa navbar-inverse navbar-fixed-top navbar" role="navigation">
        <div class="container-fluid">
          <!-- Comienza encabezado de Menú -->
            <div class="navbar-header">
              
              <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img alt="Bayusa" style="width: 40px; display: inline;" src="{{asset('recursos/img/logo/logo_mini.png')}}">
                    <span class="titulo-logo">Bayusa <spam class="hidden-sm">de México</spam></span>
                </a>

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>   
            </div>
            <!-- Termina Encabezado de Menú -->
          
            <div class="collapse navbar-collapse" id="app-navbar-collapse" aria-expanded="false" style="height: 1px;">
                <!-- Left Side Of Navbar -->
                
                {!! Menu::get('BayusaNavBar')->asUl(array('class' => 'nav navbar-nav')) !!}
                
                <!-- Opcion de buscar -->
                
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar..">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <!-- Authentication Links -->
                    
                    @if (Auth::guest())
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"> <span class="hidden-xs hidden-sm hidden-md">Login</span>
                          </a>

                          <!-- SubMenú de Usuarios-->
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Iniciar</a>
                            </li>
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
