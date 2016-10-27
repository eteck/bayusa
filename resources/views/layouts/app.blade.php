<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="favico_32x32.png"/>

    <title>Bayusa de México, S.A de C.V</title>

    <!-- Fonts -->
    <!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'-->
    <link rel="stylesheet" href="{{ asset('recursos/plugins/font-awesome-4.5.0/css/font-awesome.min.css') }}" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('recursos/plugins/bootstrap/css/bootstrap.min.css') }}" charset="utf-8">
    
    <link rel="stylesheet" href="{{ asset('recursos/plugins/angular-1.5.3/css/colorpicker.min.css') }}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('recursos/plugins/md-color-picker/dist/mdColorPicker.min.css') }}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('recursos/plugins/angular-material/angular-material.min.css') }}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('recursos/plugins/angular-1.5.3/css/angular-fontselect.min.css') }}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('recursos/css/bayusa-app-green.css') }}" rel='stylesheet' type='text/css'>
    

    <script src="{{asset('recursos/js/bootstrap-lightbox.min.js')}}"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script-->
    <script src="{{asset('recursos/plugins/jquery/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular-route.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular-resource.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular-animate.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular-loader.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular-cookies.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-material/angular-material.min.js')}}"></script>

    <!-- Coloe Pickers -->
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/bootstrap-colorpicker-module.min.js')}}"></script>

    <!-- Font Selector -->
    <script src="{{asset('recursos/plugins/angular-1.5.3/js/angular-fontselect.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/angular-1.5.3/libs/webfontloader.js')}}"></script>
    
    <!-- Todo en uno Color Picker y Font Selector -->
    <script src="{{ asset('recursos/plugins/tinycolor/dist/tinycolor-min.js') }}"></script>
    <script src="{{ asset('recursos/plugins/md-color-picker/dist/mdColorPicker.min.js') }}"></script>

    <script src="{{asset('recursos/js/menu.app.js')}}"></script>
    <!-- Styles -->
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"-->
    <style>
        #map { 
           display: block;
           width: 100%;
           height: 400px;
        }
    </style>

</head>
<body ng-app="menuApp">
    @if(\Session::has('message'))
        @include('store.partials.message')
    @endif
    
    @include('store.partials.navbar_menu')
    <div class="container-fluid">
      @yield('content')
    </div>
    @include('store.partials.footer')
    <!-- JavaScripts -->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script-->

    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
    <script src="{{asset('recursos/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('recursos/js/pinterest_grid.js')}}"></script>
    
    <script src="{{asset('recursos/js/main.js')}}"></script>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4" >
            <h5>Bayusa de México</h5>
            <hr>
            <div class="container-fluid">
              <address>
                <strong><i class="fa fa-map-marker"></i> Dirección</strong>
                <p> Bayusa de Mexico S.A de C.V, Adalberto Tejeda # 166 <br>Colonia Los Olivos Delegación Tláhuac México, DF C.P. 13210</p>
              </address>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-4">
            <h5>Desarrollado por:</h5>
            <hr>
            <div class="container-fluid">
              <div class="col-md-6">
                <div class="author-info">
                  <img class="avatar img-responsive" src="{{ asset('recursos/img/salmon.png') }}" alt="Salmon Desing">
                </div>
              </div>
              <div class="col-md-6">
                <p>Salmon Desing S.A de C.V.</p>
                <p>¡Damos valor a tus ideas!</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-4" >
            <h5>CONTACTO</h5>
            <hr>
            <div class="container-fluid">
            <address>
              <strong><i class="fa fa-phone-square"></i> Telefonos: </strong>
              <p> Llama ahora:<br>(55) <abbr title="Teléfono">5850 2716</abbr>, <abbr title="Teléfono">5850-2717</abbr>, <abbr title="Teléfono">5850-2718</abbr></p>
            </address>
            <address>
              <strong><i class="fa fa-envelope"></i> Correo electrónico: </strong>
              <p>
                Ventas: <a href="mailto:#">ventas@bayusa.com.mx</a><br>
                Pedidos: <a href="mailto:#">pedidos@bayusa.com.mx</a>
              </p>
            </address>
            </div> 
          </div>
        </div>
      </div>
      <div class="container-fluid footer-copy">
           <p class="text-center">TODOS LOS DERECHOS RESERVADOS BAYUSA DE MÉXICO @ </p>
        </div>
    </footer>

</body>
</html>
